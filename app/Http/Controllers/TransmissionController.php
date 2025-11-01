<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Transmission::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:makes,name'
        ]);

        Transmission::create(['name' => $request->name]);
        
        return response()->json(['message' => 'Transmission created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transmission $transmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transmission $transmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transmission = Transmission::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:makes,name,' . $transmission->id
        ]);

        $transmission->update(['name' => $request->name]);
        return response()->json(['message' => 'Transmission updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transmission $transmission)
    {
        //
    }
}
