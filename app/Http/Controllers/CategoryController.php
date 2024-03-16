<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validate = $request->validate([
            'cName' => 'required',
        ]);
       $data = Category::create($validate);
        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'data'=> $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
       
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
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'cName' => 'required',
        ]);
       $data = $category->update($validate);
        return response()->json([
            'success' => true,
            'message' => 'Category Updated successfully',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $data = $category->delete();
        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully',
            'data'=> $data
        ]);
    }
}
