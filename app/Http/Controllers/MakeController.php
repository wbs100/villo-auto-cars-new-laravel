<?php

namespace App\Http\Controllers;

use App\Models\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Make::all());
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

        Make::create(['name' => $request->name]);
        
        return response()->json(['message' => 'Make created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Make $make)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $make = Make::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:makes,name,' . $make->id
        ]);

        $make->update(['name' => $request->name]);
        return response()->json(['message' => 'Make updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Make $make)
    {
        //
    }
}
