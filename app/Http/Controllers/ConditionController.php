<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Condition::all());
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

        Condition::create(['name' => $request->name]);
        
        return response()->json(['message' => 'Condition created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Condition $condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $condition = Condition::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:makes,name,' . $condition->id
        ]);

        $condition->update(['name' => $request->name]);
        return response()->json(['message' => 'Condition updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condition $condition)
    {
        //
    }
}
