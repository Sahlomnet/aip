<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Location;
// use App\Models\Address;
use App\Models\Placement;
use App\Models\People;
use App\Models\Company;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('empresa.locaciones.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.locaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $location = new Location();

        $location->name = $request->name;
        $location->tel = $request->tel;
        $location->public_ip = $request->public_ip;
        $location->public_dns = $request->public_dns;
        $location->street = $request->street;
        $location->ext_number = $request->ext_number;
        $location->int_number = $request->int_number;
        $location->col = $request->col;
        $location->city = $request->city;
        $location->mun = $request->mun;
        $location->state = $request->state;
        $location->country = $request->country;
        $location->zip_code = $request->zip_code;
        $location->obs = $request->obs;

        $location->save();
        return redirect()->route('locaciones.show', $location);
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        $placements = Location::find($location->id)->placements;

        $all_assets = array();
        foreach ($placements as $placement){
            $assets = Placement::find($placement->id)->assets;
            foreach ($assets as $asset){
                $all_assets[] = $asset;
            }
        }

        $all_persons = array();
        $people_placements = Location::find($location->id)->placements->unique('people_id');
        foreach ($people_placements as $item){
            $all_persons[] = People::find($item->people_id);
        }

        // return $people_placements;
        // return $all_persons;
        return view('empresa.locaciones.show', compact('location', 'placements', 'all_assets', 'all_persons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('empresa.locaciones.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $location->name = $request->name;
        $location->tel = $request->tel;
        $location->public_ip = $request->public_ip;
        $location->public_dns = $request->public_dns;
        $location->street = $request->street;
        $location->ext_number = $request->ext_number;
        $location->int_number = $request->int_number;
        $location->col = $request->col;
        $location->city = $request->city;
        $location->mun = $request->mun;
        $location->state = $request->state;
        $location->country = $request->country;
        $location->zip_code = $request->zip_code;
        $location->obs = $request->obs;

        $location->save();
        return redirect()->route('locaciones.show', $location);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
