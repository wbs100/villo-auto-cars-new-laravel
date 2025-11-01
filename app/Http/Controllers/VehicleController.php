<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class VehicleController extends Controller
{
    // GET /vehicles
    public function index()
    {
        $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(10);
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
}
