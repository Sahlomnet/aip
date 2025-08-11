<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Address;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return redirect()->action('CompanyController@show');
        return redirect()->action([CompanyController::class, 'show'], [1]);
        
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
    public function show(Company $company)
    {
        return view('empresa.configuracion.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('empresa.configuracion.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {

        $request->validate([
            'name' => 'required'
            // 'des' => 'required|min:5',
            // 'movement_date' => 'required|date|date_format:Y-m-d',
            // 'placement_id' => 'required',
            // 'asset_id' => 'required',
            // 'obs' => 'min:10',
        ]);

        $company->name = $request->name;
        $company->short_name = $request->short_name;
        $company->business_name = $request->business_name;
        $company->rfc = $request->rfc;
        $company-> tax_regime = $request-> tax_regime;
        $company->street = $request->street;
        $company->ext_number = $request->ext_number;
        $company->int_number = $request->int_number;
        $company->col = $request->col;
        $company->city = $request->city;
        $company->mun = $request->mun;
        $company->state = $request->state;
        $company->country = $request->country;
        $company->zip_code = $request->zip_code;
        $company->obs = $request->obs;

        $company->save();
        return redirect()->route('configuracion.show', $company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
