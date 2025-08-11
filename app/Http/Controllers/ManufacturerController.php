<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('catalogos.fabricantes.index', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogos.fabricantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'des' => 'required',
        ]);

        $manufacturer = new Manufacturer();

        $manufacturer->des = $request->des;
        $manufacturer->obs = $request->obs;

        $manufacturer->save();
        return redirect()->route('fabricantes.show', $manufacturer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('catalogos.fabricantes.show', compact('manufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('catalogos.fabricantes.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $request->validate([
            'des' => 'required',
        ]);

        $manufacturer->des = $request->des;
        $manufacturer->obs = $request->obs;

        $manufacturer->save();
        return redirect()->route('fabricantes.show', $manufacturer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
