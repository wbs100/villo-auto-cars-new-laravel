<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Year;
use App\Models\Condition;
use App\Models\Body;
use App\Models\Make;
use App\Models\Transmission;
use App\Models\Color;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    // GET /vehicles
    public function index(Request $request)
    {
        $query = Vehicle::query();

        // Filtering
        if ($request->filled('price_min')) {
            $query->where('price', '>=', (float) $request->input('price_min'));
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', (float) $request->input('price_max'));
        }
        if ($request->filled('make')) {
            $query->where('make', $request->input('make'));
        }
        if ($request->filled('body')) {
            $query->where('body', $request->input('body'));
        }
        if ($request->filled('transmission')) {
            $query->where('transmission', $request->input('transmission'));
        }
        if ($request->filled('condition')) {
            $query->where('condition', $request->input('condition'));
        }
        if ($request->filled('manufactured_year')) {
            $query->where('manufactured_year', $request->input('manufactured_year'));
        }
        if ($request->filled('mileage_min')) {
            $query->where('mileage', '>=', (int) $request->input('mileage_min'));
        }
        if ($request->filled('mileage_max')) {
            $query->where('mileage', '<=', (int) $request->input('mileage_max'));
        }

        // Sorting: supported values (client can send via `sort_by`):
        // price_asc, price_desc, year_newest, year_oldest, mileage_asc, mileage_desc
        $sort = $request->input('sort_by') ?? $request->input('sort');
        switch ($sort) {
            case 'price_asc':
            case 'Price: Low to High':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
            case 'Price: High to Low':
                $query->orderBy('price', 'desc');
                break;
            case 'year_newest':
            case 'Year: Newest First':
                $query->orderBy('manufactured_year', 'desc');
                break;
            case 'year_oldest':
            case 'Year: Oldest First':
                $query->orderBy('manufactured_year', 'asc');
                break;
            case 'mileage_asc':
            case 'Mileage: Low to High':
                $query->orderBy('mileage', 'asc');
                break;
            case 'mileage_desc':
            case 'Mileage: High to Low':
                $query->orderBy('mileage', 'desc');
                break;
            default:
                $query->orderBy('price', 'asc');
        }

        $perPage = (int) $request->input('per_page', 10);
        $vehicles = $query->paginate($perPage)->appends($request->except('page'));

        return response()->json($vehicles);
    }

    // POST /vehicles
    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|string',
            'make' => 'required|string',
            'body' => 'required|string',
            'exterior_color' => 'required|string',
            'interior_color' => 'required|string',
            'mileage' => 'required|numeric',
            'transmission' => 'required|string',
            'condition' => 'required|string',
            'price' => 'required|numeric',
            'main_image' => 'required|image|max:3072',

            'image_2' => 'nullable|image|max:3072',
            'image_3' => 'nullable|image|max:3072',
            'image_4' => 'nullable|image|max:3072',
            'image_5' => 'nullable|image|max:3072',
        ]);

        // File upload logic
        foreach (['main_image', 'image_2', 'image_3', 'image_4', 'image_5'] as $key) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/vehicles'), $filename);
                $validated[$key] = $filename;
            } else {
                $validated[$key] = null;
            }
        }

        Vehicle::create($validated);

        return response()->json(['message' => 'Vehicle created successfully.']);
    }

    // PUT /vehicles/{id}
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $validated = $request->validate([
            'model' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|string',
            'make' => 'required|string',
            'body' => 'required|string',
            'exterior_color' => 'required|string',
            'interior_color' => 'required|string',
            'mileage' => 'required|numeric',
            'transmission' => 'required|string',
            'condition' => 'required|string',
            'price' => 'required|numeric',
            'main_image' => 'nullable|image|max:3072',

            'image_2' => 'nullable|image|max:3072',
            'image_3' => 'nullable|image|max:3072',
            'image_4' => 'nullable|image|max:3072',
            'image_5' => 'nullable|image|max:3072',
        ]);


        foreach (['main_image', 'image_2', 'image_3', 'image_4', 'image_5'] as $key) {
            if ($request->hasFile(key: $key)) {
                if ($vehicle->$key && File::exists(public_path('uploads/vehicles/' . $vehicle->$key))) {
                    File::delete(public_path('uploads/vehicles/' . $vehicle->$key));
                }

                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/vehicles');
                $file->move($destinationPath, $fileName);
                $validated[$key] = $fileName;
            }
        }

        $vehicle->update($validated);

        return response()->json(['message' => 'Vehicle updated successfully.']);
    }

    // DELETE /vehicles/{id}
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        foreach (['main_image', 'image_2', 'image_3', 'image_4', 'image_5'] as $key) {
            $imagePath = public_path('uploads/vehicles/' . $vehicle->$key);
            if (!empty($vehicle->$key) && File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $vehicle->delete();

        return response()->json(['message' => 'Vehicle deleted successfully.']);
    }

    // Public vehicle listings filter (GET)
    public function publicListingsFilter(Request $request)
    {
        $viewMode = session('view_mode', 'grid');
        $vehicles = Vehicle::query();

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $vehicles->where(function($q) use ($searchTerm) {
                $q->where('model', 'LIKE', "%{$searchTerm}%");
            });
        }

        if ($request->filled('year')) {
            $vehicles->whereIn('manufactured_year', $request->year);
        }
        if ($request->filled('condition')) {
            // Case-insensitive match: normalize request values to lowercase and compare LOWER(condition)
            $conditionValues = array_map(function($v) { return strtolower(trim($v)); }, (array)$request->condition);
            $vehicles->whereIn(DB::raw('LOWER(`condition`)'), $conditionValues);
        }
        if ($request->filled('body')) {
            $vehicles->whereIn('body', $request->body);
        }
        if ($request->filled('make')) {
            $vehicles->whereIn('make', $request->make);
        }
        if ($request->filled('transmission')) {
            $vehicles->whereIn('transmission', $request->transmission);
        }
        if ($request->filled('exterior_color')) {
            $vehicles->whereIn('exterior_color', $request->exterior_color);
        }
        if ($request->filled('interior_color')) {
            $vehicles->whereIn('interior_color', $request->interior_color);
        }

        // Sorting
        if ($request->filled('sort')) {
            switch ($request->input('sort', 'default')) {
                case 'price-low':
                    $vehicles->orderBy('price', 'asc');
                    break;
                case 'price-high':
                    $vehicles->orderBy('price', 'desc');
                    break;
                case 'year-new':
                    $vehicles->orderBy('manufactured_year', 'desc');
                    break;
                case 'year-old':
                    $vehicles->orderBy('manufactured_year', 'asc');
                    break;
                case 'mileage-low':
                    $vehicles->orderBy('mileage', 'desc');
                    break;
                default:
                    $vehicles->orderBy('mileage', 'asc');
            }
        }

        // Price range: support min-only, max-only, and both; accept formatted values like "Rs. 3,000,000"
        $minRaw = $request->input('price_min', null);
        $maxRaw = $request->input('price_max', null);
        $min = null;
        $max = null;
        if (!is_null($minRaw) && $minRaw !== '') {
            // Remove everything except digits so strings like "Rs.2027000" become "2027000" (avoid leading dot)
            $minClean = preg_replace('/\D+/', '', (string) $minRaw);
            if (is_numeric($minClean)) {
                $min = (float) $minClean;
            }
        }
        if (!is_null($maxRaw) && $maxRaw !== '') {
            // Remove everything except digits so strings like "Rs.3000000" become "3000000"
            $maxClean = preg_replace('/\D+/', '', (string) $maxRaw);
            if (is_numeric($maxClean)) {
                $max = (float) $maxClean;
            }
        }

        // Apply filtering based on which values are present
        if (!is_null($min) && !is_null($max)) {
            if ($min <= $max) {
                $vehicles->whereBetween('price', [$min, $max]);
            }
        } elseif (!is_null($min)) {
            $vehicles->where('price', '>=', $min);
        } elseif (!is_null($max)) {
            $vehicles->where('price', '<=', $max);
        }

        // Log debug info so we can verify incoming values and final numeric range
        if (config('app.debug')) {
            try {
                Log::debug('Vehicles price filter debug', [
                    'price_min_raw' => $minRaw,
                    'price_max_raw' => $maxRaw,
                    'price_min_numeric' => $min,
                    'price_max_numeric' => $max,
                    'ip' => $request->ip(),
                ]);

                Log::debug('Vehicles filter query debug', [
                    'params' => $request->only(['price_min','price_max','search','year','condition','body','make','transmission','exterior_color','interior_color','per_page','sort']),
                    'sql' => $vehicles->toSql(),
                    'bindings' => $vehicles->getBindings(),
                    'filtered_count' => $vehicles->count(),
                    'total_count' => Vehicle::count(),
                ]);
            } catch (\Exception $e) {
                // Avoid breaking the request if logging fails — continue gracefully.
                Log::error('Failed to log price/filter query debug: ' . $e->getMessage());
            }
        }

        // Add explicit counts to pass to the view for debug overlay
        $filteredCount = $vehicles->count();
        $totalCount = Vehicle::count();

        $vehicles = $vehicles->paginate($request->input('per_page', 8))->appends($request->query());

        // Get min and max prices with caching (5 minutes)
        $minPrice = Cache::remember('vehicles.min_price', 300, function () {
            return Vehicle::min('price') ?? 0;
        });

        $maxPrice = Cache::remember('vehicles.max_price', 300, function () {
            return Vehicle::max('price') ?? 0;
        });

        // To avoid N+1 queries we first compute counts for each relevant vehicle attribute
        // in a single query using GROUP BY, then map the Year list and other filters to
        // their corresponding counts.
        // This returns collections keyed by the attribute value -> count.
        $vehicleCountsByYear = Vehicle::groupBy('manufactured_year')
            ->selectRaw('`manufactured_year`, COUNT(*) as count')
            ->pluck('count', 'manufactured_year')
            ->mapWithKeys(function ($count, $k) { return [trim((string)$k) => $count]; });


        $years = Year::all()->map(function($year) use ($vehicleCountsByYear) {
            $key = (string) $year->name;
            $count = $vehicleCountsByYear->get($key, null);
            if (is_null($count)) { $count = $vehicleCountsByYear->get((int)$key, 0); }
            return [
                'name' => $year->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByCondition = Vehicle::groupBy(DB::raw('LOWER(`condition`)'))
            ->selectRaw('LOWER(`condition`) as condition_lower, COUNT(*) as count')
            ->pluck('count', 'condition_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $conditions = Condition::all()->map(function($condition) use ($vehicleCountsByCondition) {
            $key = strtolower(trim((string) $condition->name));
            $count = $vehicleCountsByCondition->get($key, 0);
            return [
                'name' => $condition->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByBody = Vehicle::groupBy(DB::raw('LOWER(body)'))
            ->selectRaw('LOWER(body) as body_lower, COUNT(*) as count')
            ->pluck('count', 'body_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $bodies = Body::all()->map(function($body) use ($vehicleCountsByBody) {
            $key = strtolower(trim((string) $body->name));
            $count = $vehicleCountsByBody->get($key, 0);
            return [
                'name' => $body->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByMake = Vehicle::groupBy(DB::raw('LOWER(`make`)'))
            ->selectRaw('LOWER(`make`) as make_lower, COUNT(*) as count')
            ->pluck('count', 'make_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $makes = Make::all()->map(function($make) use ($vehicleCountsByMake) {
            $key = strtolower(trim((string) $make->name));
            $count = $vehicleCountsByMake->get($key, 0);
            return [
                'name' => $make->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByTransmission = Vehicle::groupBy(DB::raw('LOWER(transmission)'))
            ->selectRaw('LOWER(transmission) as transmission_lower, COUNT(*) as count')
            ->pluck('count', 'transmission_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $transmissions = Transmission::all()->map(function($transmission) use ($vehicleCountsByTransmission) {
            $key = strtolower(trim((string) $transmission->name));
            $count = $vehicleCountsByTransmission->get($key, 0);
            return [
                'name' => $transmission->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByExteriorColor = Vehicle::groupBy(DB::raw('LOWER(exterior_color)'))
            ->selectRaw('LOWER(exterior_color) as color_lower, COUNT(*) as count')
            ->pluck('count', 'color_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $colors = Color::all()->map(function($color) use ($vehicleCountsByExteriorColor) {
            $key = strtolower(trim((string) $color->name));
            $count = $vehicleCountsByExteriorColor->get($key, 0);
            return [
                'name' => $color->name,
                'count' => (int) $count
            ];
        });

        $vehicleCountsByModel = Vehicle::groupBy(DB::raw('LOWER(model)'))
            ->selectRaw('LOWER(model) as model_lower, COUNT(*) as count')
            ->pluck('count', 'model_lower')
            ->mapWithKeys(function ($count, $k) { return [trim(strtolower((string)$k)) => $count]; });

        $models = Vehicle::select('model')->distinct()->pluck('model')->map(function($model) use ($vehicleCountsByModel) {
            $key = strtolower(trim((string) $model));
            $count = $vehicleCountsByModel->get($key, 0);
            return [
                'name' => $model,
                'count' => (int) $count
            ];
        });

        // Removed debug logging; counts are prepared above.

        return view('public-site.vehicle-listings', compact(
            'vehicles',
            'viewMode',
            'years',
            'conditions',
            'bodies',
            'makes',
            'transmissions',
            'colors',
            'models',
            'minPrice',
            'maxPrice'
        ))->with([
            'filteredCount' => $filteredCount,
            'totalCount' => $totalCount
        ]);
    }
}
