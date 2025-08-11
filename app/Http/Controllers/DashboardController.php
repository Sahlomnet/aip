<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Asset;
use App\Models\Category;
use App\Models\License;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hoy = date("Y-m-d");
        $assets_count = Asset::count();
        $noAsignados = Asset::where('placement_id', 1)->count();
        $asignados = $assets_count - $noAsignados;
        $categories_asset = Category::withCount('assets')->get();

        $mantenimiento_correcto = Asset::whereDate('next_maintenance_date', '>=', date("Y-m-d", strtotime($hoy."+ 2 month")))->count();
        $mantenimiento_proximo = Asset::whereDate('next_maintenance_date', '>=', $hoy)->whereDate('next_maintenance_date', '<=', date("Y-m-d", strtotime($hoy."+ 2 month")))->count();
        $mantenimiento_vencido = Asset::whereDate('next_maintenance_date', '<=', $hoy)->count();
        $sin_mantenimiento = Asset::where('last_maintenance_date', NULL)->count();

        $software_vigente = License::whereDate('expiration_date', '>=', date("Y-m-d", strtotime($hoy."+ 2 month")))->count();
        $software_proximo = License::whereDate('expiration_date', '>=', $hoy)->whereDate('expiration_date', '<=', date("Y-m-d", strtotime($hoy."+ 2 month")))->count();
        $software_vencido = License::whereDate('expiration_date', '<=', $hoy)->count();
        $sin_vencimiento = License::where('expiration_date', NULL)->count();

        // return date("Y-m-d", strtotime($hoy."+ 2 month"));
        // return $sin_vencimiento;
        return view('dashboard', compact('asignados', 'noAsignados', 'categories_asset', 'sin_mantenimiento', 'mantenimiento_vencido', 'mantenimiento_proximo', 'mantenimiento_correcto', 'software_vigente', 'software_proximo', 'software_vencido', 'sin_vencimiento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
