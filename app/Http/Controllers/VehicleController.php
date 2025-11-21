<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
            $vehicles->whereIn('condition', $request->condition);
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
        // Price range
        if ($request->filled('price_min') && $request->filled('price_max')) {
            $min = floatval(preg_replace('/[^0-9.]/', '', $request->price_min));
            $max = floatval(preg_replace('/[^0-9.]/', '', $request->price_max));
            if ($min && $max && $min <= $max) {
                $vehicles->whereBetween('price', [$min, $max]);
            }
        }
        $vehicles = $vehicles->paginate($request->input('per_page', 8))->appends($request->query());
        
        return view('public-site.vehicle-listings', compact('vehicles', 'viewMode'));
    }
}
