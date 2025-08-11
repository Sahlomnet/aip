<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('catalogos.categorias.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogos.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod' => 'required',
            'des' => 'required|min:5',
        ]);

        // return $request->all();
        $category = new Category();

        $category->cod = $request->cod;
        $category->des = $request->des;
        $category->obs = $request->obs;

        $category->save();
        return redirect()->route('categorias.show', $category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //return $category;
        return view('catalogos.categorias.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // return $category;
        return view('catalogos.categorias.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'cod' => 'required',
            'des' => 'required|min:5',
        ]);

        $category->cod = $request->cod;
        $category->des = $request->des;
        $category->obs = $request->obs;

        $category->save();
        return redirect()->route('categorias.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
