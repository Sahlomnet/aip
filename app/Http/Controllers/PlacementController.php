<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Placement;
use App\Models\Location;
use App\Models\People;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $placements = Placement::all();
        return view('empresa.ubicaciones.index', compact('placements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $people = People::all();
        // return $people;
        return view('empresa.ubicaciones.create', compact('locations', 'people'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'people_id' => 'required',
        ]);

        // return $request;
        $placement = new Placement();

        $placement->name = $request->name;
        $placement->location_id = $request->location_id;
        $placement->people_id = $request->people_id;
        $placement->obs = $request->obs;

        $placement->save();
        return redirect()->route('ubicaciones.show', $placement);
    }

    /**
     * Display the specified resource.
     */
    public function show(Placement $placement)
    {
        $assets = Placement::find($placement->id)->assets;
        $movements = Placement::find($placement->id)->movements;
        // return $movements;
        return view('empresa.ubicaciones.show', compact('placement', 'assets', 'movements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Placement $placement)
    {
        $locations = Location::all();
        $people = People::all();
        return view('empresa.ubicaciones.edit', compact('placement', 'locations', 'people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Placement $placement)
    {
        $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'people_id' => 'required',
        ]);
    
        $placement->name = $request->name;
        $placement->location_id = $request->location_id;
        $placement->people_id = $request->people_id;
        $placement->obs = $request->obs;

        $placement->save();
        return redirect()->route('ubicaciones.show', $placement);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
