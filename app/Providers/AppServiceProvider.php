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

            $view->with([
                //'vehicles' => Vehicle::get(),
                'years' => Year::get(),
                'makes' => Make::get(),
                'colors' => Color::get(),
                'conditions' => Condition::get(),
                'bodies' => Body::get(),
                'transmissions' => Transmission::get(),
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'featuredVehicles' => $featuredVehicles,
                'galleryVehicles' => $galleryVehicles,
            ]);
        });
    }
}
