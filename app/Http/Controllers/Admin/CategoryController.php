<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.list', [
            'ctgr' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $request['slug'] = Str::slug($request->name);
        $res = Category::create($request->all());
        if ($res) {
            return redirect()->route('category.index')->with('success', "Category added successfully");
        } else {
            return redirect()->back()->with('error', "Category not added");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => "required"
        ]);
        $request['slug'] = Str::slug($request->name);
        $categ = Category::find($id);
        $categ->update($request->all());
        return redirect()->route('category.index')->with('success', "Category updated !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category.index')->with('success', "Category deleted !");
    }
}
