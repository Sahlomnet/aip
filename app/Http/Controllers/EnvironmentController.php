<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Environment;
use App\Models\Asset;
use DB;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $environments = Environment::all();
        return view('caracteristicas.entorno.index', compact('environments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        return view('caracteristicas.entorno.create', compact('assets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:5',
            'user' => 'required',
            'asset_id' => 'required',
        ]);

        $environment = new Environment();

        $environment->name = $request->name;
        $environment->domain_group = $request->domain_group;
        $environment->user = $request->user;
        $environment->password = $request->password;
        $environment->rdp_port = $request->rdp_port;
        $environment->asset_id = $request->asset_id;
        $environment->obs = $request->obs;

        $environment->save();
        return redirect()->route('entorno.show', $environment);
    }

    /**
     * Display the specified resource.
     */
    public function show(Environment $environment)
    {
        return view('caracteristicas.entorno.show', compact('environment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Environment $environment)
    {
        $assets = Asset::all();
        return view('caracteristicas.entorno.edit', compact('environment', 'assets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Environment $environment)
    {
        $request->validate([
            'name' => 'required|min:5',
            'user' => 'required',
            'asset_id' => 'required',
        ]);

        $environment->name = $request->name;
        $environment->domain_group = $request->domain_group;
        $environment->user = $request->user;
        $environment->password = $request->password;
        $environment->rdp_port = $request->rdp_port;
        $environment->asset_id = $request->asset_id;
        $environment->obs = $request->obs;

        $environment->save();
        return redirect()->route('entorno.show', $environment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
