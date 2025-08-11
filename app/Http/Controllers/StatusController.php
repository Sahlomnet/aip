<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('catalogos.estatus.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogos.estatus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'des' => 'required',
        ]);

        $status = new Status();

        $status->des = $request->des;
        $status->obs = $request->obs;

        $status->save();
        return redirect()->route('estatus.show', $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        return view('catalogos.estatus.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('catalogos.estatus.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $request->validate([
            'des' => 'required',
        ]);

        $status->des = $request->des;
        $status->obs = $request->obs;

        $status->save();
        return redirect()->route('estatus.show', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
