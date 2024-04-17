<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductSubImage;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use Session;

class VendorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product, $vendorId;
    public function index()
    {
        $this->vendorId = Session::get('vendor_id');
        return view('admin.vendor.index', ['products' => Product::where('vendor_id', $this->vendorId)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vendor.add-product',[
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'sizes' => Size::all(),
            'colors' => Color::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request, Session::get('vendor_id'));
        ProductColor::newProductColor($request->colors, $this->product->id);
        ProductSize::newProductSize($request->sizes, $this->product->id);
        ProductSubImage::newProductSubImage($request->sub_Images, $this->product->id);
        return back()->with('message', 'Product added successfully. Please wait until admin approval');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.vendor.show-product', ['product' => Product::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.vendor.edit-product', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'sizes' => Size::all(),
            'colors' => Color::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->product = Product::find($id);
        Product::updateProduct($request, $this->product);
        ProductColor::updateProductColor($request->colors, $this->product->id);
        ProductSize::updateProductSize($request->sizes, $this->product->id);
        if ($request->sub_Images)
        {
            ProductSubImage::updateProductSubImage($request->sub_Images, $this->product->id);
        }
        return redirect('/vendor-product')->with('message', 'Product info updated successfully.!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::deleteProduct(Product::find($id));
        ProductColor::deleteProductColor($id);
        ProductSize::deleteProductSize($id);
        ProductSubImage::deleteProductSubImage($id);
        return back()->with('message', 'Product info deleted successfully.!!!');
    }
}
