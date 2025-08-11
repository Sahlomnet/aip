<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Processor;
use App\Models\Asset;
use App\Models\Manufacturer;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processors = Processor::all();
        return view('caracteristicas.procesador.index', compact('processors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();
        return view('caracteristicas.procesador.create', compact('assets', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'des' => 'required|min:5',
            'frequency' => 'required',
            'asset_id' => 'required',
        ]);

        $processor = new Processor();

        $processor->des = $request->des;
        $processor->frequency = $request->frequency;
        $processor->asset_id = $request->asset_id;
        $processor->manufacturer_id = $request->manufacturer_id;
        $processor->obs = $request->obs;

        $processor->save();
        return redirect()->route('procesador.show', $processor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Processor $processor)
    {
        return view('caracteristicas.procesador.show', compact('processor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Processor $processor)
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();

        return view('caracteristicas.procesador.edit', compact('processor', 'assets', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Processor $processor)
    {
        $request->validate([
            'des' => 'required|min:5',
            'frequency' => 'required',
            'asset_id' => 'required',
        ]);

        $processor->des = $request->des;
        $processor->frequency = $request->frequency;
        $processor->asset_id = $request->asset_id;
        $processor->manufacturer_id = $request->manufacturer_id;
        $processor->obs = $request->obs;

        $processor->save();
        return redirect()->route('procesador.show', $processor);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
