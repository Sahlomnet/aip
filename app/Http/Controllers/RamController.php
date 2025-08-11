<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Ram;
use App\Models\Asset;
use App\Models\Manufacturer;

class RamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rams = Ram::all();
        return view('caracteristicas.ram.index', compact('rams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();
        return view('caracteristicas.ram.create', compact('assets', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'capacity' => 'required',
            'asset_id' => 'required',
        ]);

        $ram = new Ram();

        $ram->interface = $request->interface;
        $ram->speed = $request->speed;
        $ram->capacity = $request->capacity;
        $ram->asset_id = $request->asset_id;
        $ram->manufacturer_id = $request->manufacturer_id;
        $ram->obs = $request->obs;

        $ram->save();
        return redirect()->route('ram.show', $ram);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ram $ram)
    {
        return view('caracteristicas.ram.show', compact('ram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ram $ram)
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();

        return view('caracteristicas.ram.edit', compact('ram', 'assets', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ram $ram)
    {
        $request->validate([
            'capacity' => 'required',
            'asset_id' => 'required',
        ]);

        $ram->interface = $request->interface;
        $ram->speed = $request->speed;
        $ram->capacity = $request->capacity;
        $ram->asset_id = $request->asset_id;
        $ram->manufacturer_id = $request->manufacturer_id;
        $ram->obs = $request->obs;

        $ram->save();
        return redirect()->route('ram.show', $ram);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
