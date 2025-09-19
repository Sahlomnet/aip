<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\License;
use App\Models\Asset;
use App\Models\Manufacturer;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licenses = License::all();
        return view('caracteristicas.software.index', compact('licenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();
        return view('caracteristicas.software.create', compact('assets', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'des' => 'required',
            // 'expiration_date' => 'required',
            // 'asset_id' => 'required',
        ]);

        $license = new License();

        $license->des = $request->des;
        $license->serial = $request->serial;
        $license->expiration_date = $request->expiration_date;
        $license->asset_id = $request->asset_id;
        $license->manufacturer_id = $request->manufacturer_id;
        $license->obs = $request->obs;

        $license->save();
        return redirect()->route('software.show', $license);
    }

    /**
     * Display the specified resource.
     */
    public function show(License $license)
    {
        return view('caracteristicas.software.show', compact('license'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $license)
    {
        $assets = Asset::all();
        $manufacturers = Manufacturer::all();

        return view('caracteristicas.software.edit', compact('license', 'assets', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, License $license)
    {
        $request->validate([
            'des' => 'required',
            // 'asset_id' => 'required',
        ]);

        $license->des = $request->des;
        $license->serial = $request->serial;
        $license->expiration_date = $request->expiration_date;
        $license->asset_id = $request->asset_id;
        $license->manufacturer_id = $request->manufacturer_id;
        $license->obs = $request->obs;

        $license->save();
        return redirect()->route('software.show', $license);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function current_software()
    {
        $hoy = date("Y-m-d");
        $licenses = License::whereDate('expiration_date', '>=', date("Y-m-d", strtotime($hoy."+ 2 month")))->get();
        // dd($licenses);
        return view('reportes.softwarevigente', compact('licenses'));
    }
    public function upcoming_software()

    {
        $hoy = date("Y-m-d");
        $licenses = License::whereDate('expiration_date', '>=', $hoy)->whereDate('expiration_date', '<=', date("Y-m-d", strtotime($hoy."+ 2 month")))->get();
        return view('reportes.softwareproximo', compact('licenses'));
    }

    public function expired_software()
    {
        $hoy = date("Y-m-d");
        $licenses = License::whereDate('expiration_date', '<=', $hoy)->get();
        return view('reportes.softwarevencido', compact('licenses'));
    }

    public function free_software()
    {
        $hoy = date("Y-m-d");
        $licenses = License::where('expiration_date', NULL)->get();
        return view('reportes.softwarelibre', compact('licenses'));
    }

}
