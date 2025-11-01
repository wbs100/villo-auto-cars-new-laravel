<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Body::all());
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

        Body::create(['name' => $request->name]);

        return response()->json(['message' => 'Body created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Body $body)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Body $body)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $body = Body::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:makes,name,' . $body->id
        ]);

        $body->update(['name' => $request->name]);
        return response()->json(['message' => 'Body updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Body $body)
    {
        //
    }
}
