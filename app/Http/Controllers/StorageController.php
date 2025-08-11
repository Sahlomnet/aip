<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Storage;
use App\Models\Asset;
use App\Models\Manufacturer;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storages = Storage::all();
        return view('caracteristicas.almacenamiento.index', compact('storages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();
        return view('caracteristicas.almacenamiento.create', compact('assets', 'manufacturers'));
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

        $storage = new Storage();

        $storage->type = $request->type;
        $storage->interface = $request->interface;
        $storage->capacity = $request->capacity;
        $storage->asset_id = $request->asset_id;
        $storage->manufacturer_id = $request->manufacturer_id;
        $storage->obs = $request->obs;

        $storage->save();
        return redirect()->route('almacenamiento.show', $storage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $storage)
    {
        return view('caracteristicas.almacenamiento.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();

        return view('caracteristicas.almacenamiento.edit', compact('storage', 'assets', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Storage $storage)
    {
        $request->validate([
            'capacity' => 'required',
            'asset_id' => 'required',
        ]);
        
        $storage->type = $request->type;
        $storage->interface = $request->interface;
        $storage->capacity = $request->capacity;
        $storage->asset_id = $request->asset_id;
        $storage->manufacturer_id = $request->manufacturer_id;
        $storage->obs = $request->obs;

        $storage->save();
        return redirect()->route('almacenamiento.show', $storage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
