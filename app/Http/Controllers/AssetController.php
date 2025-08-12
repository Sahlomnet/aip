<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Asset;
use App\Models\Status;
use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Usage;
use App\Models\Storage;
use App\Models\Processor;
use App\Models\Ram;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();
        // $statuses = Status::with('assets')->get();
        // $categories = Category::with('assets')->get();
        // $manufacturers = Manufacturer::with('assets')->get();
        return view('activos.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        $usages = Usage::all();
        return view('activos.create', compact('statuses', 'manufacturers', 'categories', 'usages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'cod' => 'required|unique:assets,cod',
            'des' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
            'usage_id' => 'required',
            'img' => 'mimes:png',
            'invoice' => 'mimes:pdf',
        ]);

        $asset = new Asset();

        $asset->cod = $request->cod;
        $asset->des = $request->des;
        $asset->model = $request->model;
        $asset->serial = $request->serial;
        if(isset($request->img)){
            $filename = $request->cod.".".$request->img->extension();
            $request->img->move(public_path("img/assets"), $filename);
            $asset->img = "img/assets/".$filename;
        }
        $asset->manufacturer_id = $request->manufacturer_id;
        $asset->category_id = $request->category_id;
        $asset->status_id = $request->status_id;
        $asset->usage_id = $request->usage_id;
        $asset->last_maintenance_date = $request->last_maintenance_date;
        $asset->maintenance_frequency = $request->maintenance_frequency;
        if(isset($request->last_maintenance_date) && isset($request->maintenance_frequency)){
            $asset->next_maintenance_date = date("Y-m-d",strtotime($request->last_maintenance_date."+ ".$request->maintenance_frequency." month")); 
        }
        $asset->cost = $request->cost;
        $asset->purchase_date = $request->purchase_date;
        if(isset($request->invoice)){
            $filename = $request->cod.".".$request->invoice->extension();
            $request->invoice->move(public_path("img/invoice"), $filename);
            $asset->invoice = "img/invoice/".$filename;
        }
        $asset->obs = $request->obs;
        $asset->placement_id = 1;

        // return $asset;
        $asset->save();
        return redirect()->route('activos.show', $asset);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        $processors = Asset::find($asset->id)->processors;
        $rams = Asset::find($asset->id)->rams;
        $storages = Asset::find($asset->id)->storages;
        $networks = Asset::find($asset->id)->networks;
        $licenses = Asset::find($asset->id)->licenses;
        $environments = Asset::find($asset->id)->environments;
        $movements = Asset::find($asset->id)->movements;
        
        // $consulta_estatus = DB::table('statuses')->where('id', $asset->id_status)->value('des');
        // $consulta_manufacturers = DB::table('manufacturers')->where('id', $asset->id_manufacturer)->value('des');
        // $consulta_categories = DB::table('categories')->where('id', $asset->id_category)->value('des');
        // return $movements;
        return view('activos.show', compact('asset', 'processors', 'rams', 'storages', 'networks', 'licenses', 'environments', 'movements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        $statuses = Status::all();
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        $usages = Usage::all();
        return view('activos.edit', compact('asset', 'statuses', 'manufacturers', 'categories', 'usages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'cod' => 'required|unique:assets,cod,'.$asset->id,
            'des' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
            'usage_id' => 'required',
            'img' => 'mimes:png',
            'invoice' => 'mimes:pdf',
        ]);
        
        $asset->cod = $request->cod;
        $asset->des = $request->des;
        $asset->model = $request->model;
        $asset->serial = $request->serial;
        if(isset($request->img)){
            $filename = $request->cod.".".$request->img->extension();
            $request->img->move(public_path("img/assets"), $filename);
            $asset->img = "img/assets/".$filename;
        }
        $asset->manufacturer_id = $request->manufacturer_id;
        $asset->category_id = $request->category_id;
        $asset->status_id = $request->status_id;
        $asset->usage_id = $request->usage_id;
        $asset->last_maintenance_date = $request->last_maintenance_date;
        $asset->maintenance_frequency = $request->maintenance_frequency;
        if(isset($request->last_maintenance_date) && isset($request->maintenance_frequency)){
            $asset->next_maintenance_date = date("Y-m-d",strtotime($request->last_maintenance_date."+ ".$request->maintenance_frequency." month")); 
        }
        $asset->cost = $request->cost;
        $asset->purchase_date = $request->purchase_date;
        if(isset($request->invoice)){
            $filename = $request->cod.".".$request->invoice->extension();
            $request->invoice->move(public_path("img/invoice"), $filename);
            $asset->invoice = "img/invoice/".$filename;
        }
        $asset->obs = $request->obs;
        
        $asset->save();
        return redirect()->route('activos.show', $asset);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function assetcomputer()
    {
        // $computers = Asset::all();
        $assets = Asset::where('category_id', '=', '1')->orWhere('category_id','=','2')->orWhere('category_id','=','3')->orWhere('category_id','=','4')->get();
        $processors = Processor::all();
        $rams = Ram::all();
        $storages = Storage::all();

        // dd( $assets );
        
        return view('reportes.activoscomputo', compact('assets', 'processors', 'rams', 'storages'));
    }
}
