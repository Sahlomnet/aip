<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movement;
use App\Models\Asset;
use App\Models\Placement;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::all();
        return view('movimientos.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $placements = Placement::all();
        return view('movimientos.create', compact('assets', 'placements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'des' => 'required|min:5',
            'movement_date' => 'required|date|date_format:Y-m-d',
            'placement_id' => 'required',
            'asset_id' => 'required',
            // 'obs' => 'min:10',
        ]);


        $movement = new Movement();
        $asset = Asset::find($request->asset_id);
        // return $asset;

        $movement->des = $request->des;
        $movement->movement_date = $request->movement_date;
        $movement->placement_id = $request->placement_id;
        $asset->placement_id = $request->placement_id;
        $movement->asset_id = $request->asset_id;
        $movement->obs = $request->obs;

        $asset->save();
        $movement->save();
        return redirect()->route('movimientos.show', $movement);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movement $movement)
    {
        $consulta_activo = DB::table('assets')->where('id', $movement->id_asset)->value('cod');
        $consulta_ubicacion = DB::table('placements')->where('id', $movement->id_placement)->value('name');

        return view('movimientos.show', compact('movement', 'consulta_activo', 'consulta_ubicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movement $movement)
    {
        $assets = Asset::all();
        $placements = Placement::all();

        // return $movement;
        return view('movimientos.edit', compact('movement', 'assets', 'placements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movement $movement)
    {
        $request->validate([
            'des' => 'required|min:5',
            'movement_date' => 'required|date|date_format:Y-m-d',
            'placement_id' => 'required',
            'asset_id' => 'required',
        ]);
        // return $request;
        $asset = Asset::find($request->asset_id);

        $movement->des = $request->des;
        $movement->movement_date = $request->movement_date;
        $movement->placement_id = $request->placement_id;
        $asset->placement_id = $request->placement_id;
        $movement->asset_id = $request->asset_id;
        $movement->obs = $request->obs;

        $asset->save();
        $movement->save();
        return redirect()->route('movimientos.show', $movement);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
