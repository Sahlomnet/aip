<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Placement;
use App\Models\Location;
use DB;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = People::all();
        return view('empresa.personas.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $placements = Placement::all();
        $locations = Location::all();

        return view('empresa.personas.create', compact('placements', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);

        $people = new People();

        $people->name = $request->name;
        $people->last_name = $request->last_name;
        $people->position = $request->position;
        $people->tel = $request->tel;
        $people->mail = $request->mail;
        $people->obs = $request->obs;

        $people->save();
        return redirect()->route('personas.show', $people);
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        // $placements = Placement::where('people_id', $people->id)->get();
        $placements = People::find($people->id)->placements;
        // $assets = Placement::find(23)->assets;
        $all_assets = array();
        foreach ($placements as $placement){
            $assets = Placement::find($placement->id)->assets;
            foreach ($assets as $asset){
                $all_assets[] = $asset;
            }
            // $assets .= Placement::find($placement->id)->assets;
        }

        $all_movements = array();
        foreach ($placements as $placement){
            $movements = Placement::find($placement->id)->movements;
            foreach ($movements as $movement){
                $all_movements[] = $movement;
            }
        }



        // return $all_movements;
        return view('empresa.personas.show', compact('people', 'all_assets', 'all_movements', 'placements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        $locations = Location::all();
        $placements = Placement::all();
        return view('empresa.personas.edit', compact('people', 'locations', 'placements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $people)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);

        $people->name = $request->name;
        $people->last_name = $request->last_name;
        $people->position = $request->position;
        $people->tel = $request->tel;
        $people->mail = $request->mail;
        $people->obs = $request->obs;

        $people->save();
        return redirect()->route('personas.show', $people);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function assetpeople()
    {
        $people = People::all();
        
        return view('reportes.activosporpersona', compact('people'));
    }
    
}
