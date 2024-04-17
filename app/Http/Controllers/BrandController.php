<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand.index', ['brands' => Brand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required'
        ],[
            'name.required' => 'Please write a brand name first. *',
            'status.required' => 'Please you have to select status. *'
        ]);
        Brand::newBrand($request);
        return back()->with('message', 'New brand info added successfully.!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        Brand::updateBrand($request, $brand);
        return redirect('/brand')->with('message', 'Brand info updated successfully.!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        Brand::deleteBrand($brand);
        return back()->with('message', 'Brand info deleted successfully.!!!');
    }
}
