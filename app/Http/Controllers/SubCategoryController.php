<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index', ['sub_categories' => SubCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.add', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required', /*| unique:sub_categories,name*/
            'status' => 'required'
        ],
        [
            'category_id.required' => 'Please select a category first *',
            'name.required' => 'Enter a category name *',
            /*'name.unique' => 'Subcategory name has already taken *',*/
            'status.required' => 'Please select the status *'
        ]);
        SubCategory::newSubCategory($request);
        return back()->with('message', 'Subcategory info created successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.sub-category.edit', [
            'sub_category' => $subCategory,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        SubCategory::updateSubCategory($request, $subCategory);
        return redirect('/sub-category')->with('message', 'Subcategory info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        SubCategory::deleteSubCategory($subCategory);
        return back()->with('message', 'Subcategory info deleted successfully.');
    }
}
