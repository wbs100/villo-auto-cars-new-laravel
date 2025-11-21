<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Year;
use App\Models\Make;
use App\Models\Condition;
use App\Models\Body;
use App\Models\Transmission;
//use App\Models\Vehicle;
use App\Models\Color;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Vehicle;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            // Compute global price range for vehicles (cached to reduce DB load)
            $minPrice = (float) Cache::remember('vehicles.min_price', 300, function () { return (float) (Vehicle::min('price') ?? 0); });
            $maxPrice = (float) Cache::remember('vehicles.max_price', 300, function () { return (float) (Vehicle::max('price') ?? 0); });
            $featuredVehicles = Cache::remember('vehicles.featured.' . Carbon::now()->year, 300, function () {
                return Vehicle::where('manufactured_year', Carbon::now()->year)
                ->whereRaw("LOWER(`condition`) = 'brand new'")
                ->orderBy('created_at', 'desc')
                ->take(9)
                ->get();
            });
                        // Gallery items: recent vehicles that have at least one image (cached)
                        $galleryVehicles = Cache::remember('vehicles.gallery', 300, function () {
                            return Vehicle::where(function($q) {
                                        $q->whereNotNull('main_image')
                                            ->orWhereNotNull('image_2')
                                            ->orWhereNotNull('image_3')
                                            ->orWhereNotNull('image_4')
                                            ->orWhereNotNull('image_5');
                                })
                                ->orderBy('created_at', 'desc')
                                ->take(12)
                                ->get();
                        });

            // Aggregate counts once (cached) and map them to arrays with 'name' and 'count'.
            $vehicleCountsByYear = Cache::remember('vehicle.counts.by.year', 120, function () {
                return Vehicle::groupBy('manufactured_year')
                    ->selectRaw('`manufactured_year`, COUNT(*) as count')
                    ->pluck('count', 'manufactured_year')
                    ->mapWithKeys(function ($count, $k) { return [trim((string)$k) => $count]; });
            });

                $vehicleCountsByCondition = Cache::remember('vehicle.counts.by.condition', 120, function () {
                    // Group by lowercase of condition column to handle case-insensitive matches
                    return Vehicle::groupBy(DB::raw('LOWER(`condition`)'))
                        ->selectRaw('LOWER(`condition`) as condition_lower, COUNT(*) as count')
                        ->pluck('count', 'condition_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

                $vehicleCountsByBody = Cache::remember('vehicle.counts.by.body', 120, function () {
                    return Vehicle::groupBy(DB::raw('LOWER(body)'))
                        ->selectRaw('LOWER(body) as body_lower, COUNT(*) as count')
                        ->pluck('count', 'body_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

                $vehicleCountsByMake = Cache::remember('vehicle.counts.by.make', 120, function () {
                    return Vehicle::groupBy(DB::raw('LOWER(`make`)'))
                        ->selectRaw('LOWER(`make`) as make_lower, COUNT(*) as count')
                        ->pluck('count', 'make_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

                $vehicleCountsByTransmission = Cache::remember('vehicle.counts.by.transmission', 120, function () {
                    return Vehicle::groupBy(DB::raw('LOWER(transmission)'))
                        ->selectRaw('LOWER(transmission) as transmission_lower, COUNT(*) as count')
                        ->pluck('count', 'transmission_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

                $vehicleCountsByExteriorColor = Cache::remember('vehicle.counts.by.color', 120, function () {
                    return Vehicle::groupBy(DB::raw('LOWER(exterior_color)'))
                        ->selectRaw('LOWER(exterior_color) as color_lower, COUNT(*) as count')
                        ->pluck('count', 'color_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

                $vehicleCountsByModel = Cache::remember('vehicle.counts.by.model', 120, function () {
                    return Vehicle::groupBy(DB::raw('LOWER(model)'))
                        ->selectRaw('LOWER(model) as model_lower, COUNT(*) as count')
                        ->pluck('count', 'model_lower')
                        ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });
                });

            $years = Year::all()->map(function ($year) use ($vehicleCountsByYear) {
                $k = (string) $year->name;
                $count = $vehicleCountsByYear->get($k, 0);
                if (is_null($count) && is_numeric($k)) { $count = $vehicleCountsByYear->get((int)$k, 0); }
                return ['id' => $year->id, 'name' => $year->name, 'count' => (int)$count, 'created_at' => $year->created_at, 'updated_at' => $year->updated_at];
            });

            $conditions = Condition::all()->map(function ($condition) use ($vehicleCountsByCondition) {
                // Normalise to lower-case trimmed keys since vehicle counts are keyed by lowercased condition
                $k = strtolower(trim((string) $condition->name));
                $count = $vehicleCountsByCondition->get($k, 0);
                return ['id' => $condition->id, 'name' => $condition->name, 'count' => (int)$count];
            });

            // Debug info: only log when APP_DEBUG is enabled so production logs are silent
            if (config('app.debug')) {
                Log::debug('vehicleCountsByCondition', $vehicleCountsByCondition->toArray());
                Log::debug('conditions (view)', $conditions->toArray());
            }

            $bodies = Body::all()->map(function ($body) use ($vehicleCountsByBody) {
                $k = strtolower(trim((string) $body->name));
                $count = $vehicleCountsByBody->get($k, 0);
                return ['id' => $body->id, 'name' => $body->name, 'count' => (int)$count];
            });

            $makes = Make::all()->map(function ($make) use ($vehicleCountsByMake) {
                $k = strtolower(trim((string) $make->name));
                $count = $vehicleCountsByMake->get($k, 0);
                return ['id' => $make->id, 'name' => $make->name, 'count' => (int)$count];
            });

            $transmissions = Transmission::all()->map(function ($transmission) use ($vehicleCountsByTransmission) {
                $k = strtolower(trim((string) $transmission->name));
                $count = $vehicleCountsByTransmission->get($k, 0);
                return ['id' => $transmission->id, 'name' => $transmission->name, 'count' => (int)$count];
            });

            $colors = Color::all()->map(function ($color) use ($vehicleCountsByExteriorColor) {
                $k = strtolower(trim((string) $color->name));
                $count = $vehicleCountsByExteriorColor->get($k, 0);
                return ['id' => $color->id, 'name' => $color->name, 'count' => (int)$count];
            });

            $models = Vehicle::select('model')->distinct()->pluck('model')->map(function ($model) use ($vehicleCountsByModel) {
                $k = strtolower(trim((string) $model));
                $count = $vehicleCountsByModel->get($k, 0);
                return ['name' => $model, 'count' => (int)$count];
            });

            $view->with([
                'years' => $years,
                'makes' => $makes,
                'colors' => $colors,
                'conditions' => $conditions,
                'bodies' => $bodies,
                'transmissions' => $transmissions,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'featuredVehicles' => $featuredVehicles,
                'galleryVehicles' => $galleryVehicles,
            ]);
        });
    }
}
