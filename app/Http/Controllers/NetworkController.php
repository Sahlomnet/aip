<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Network;
use App\Models\Asset;
use App\Models\Manufacturer;


class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Network::all();
        return view('caracteristicas.red.index', compact('networks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();
        return view('caracteristicas.red.create', compact('assets', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'asset_id' => 'required',
        ]);

        $network = new Network();

        $network->type = $request->type;
        $network->mac = $request->mac;
        $network->ip = $request->ip;
        $network->asset_id = $request->asset_id;
        $network->manufacturer_id = $request->manufacturer_id;
        $network->obs = $request->obs;

        $network->save();
        return redirect()->route('red.show', $network);
    }

    /**
     * Display the specified resource.
     */
    public function show(Network $network)
    {
        return view('caracteristicas.red.show', compact('network'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Network $network)
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();

        return view('caracteristicas.red.edit', compact('network', 'assets', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Network $network)
    {
        $request->validate([
            'type' => 'required',
            'asset_id' => 'required',
        ]);

        $network->type = $request->type;
        $network->mac = $request->mac;
        $network->ip = $request->ip;
        $network->asset_id = $request->asset_id;
        $network->manufacturer_id = $request->manufacturer_id;
        $network->obs = $request->obs;

        $network->save();
        return redirect()->route('red.show', $network);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
