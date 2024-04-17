<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductSubImage;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $subCategories, $product;
    public function index()
    {
        return view('admin.product.index', ['products' => Product::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add', [
            'categories'    => Category::all(),
            'subCategories'    => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'colors' => Color::all(),
            'sizes' => Size::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductColor::newProductColor($request->colors, $this->product->id);
        ProductSize::newProductSize($request->sizes, $this->product->id);
        ProductSubImage::newProductSubImage($request->sub_Images, $this->product->id);
        return back()->with('message', 'Product info inserted successfully.!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories'    => Category::all(),
            'subCategories'    => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
            'colors' => Color::all(),
            'sizes' => Size::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request, $product);
        ProductColor::updateProductColor($request->colors, $product->id);
        ProductSize::updateProductSize($request->sizes, $product->id);
        if ($request->sub_Images)
        {
            ProductSubImage::updateProductSubImage($request->sub_Images, $product->id);
        }
        return redirect('/product')->with('message', 'Product info updated successfully.!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product);
        ProductColor::deleteProductColor($product->id);
        ProductSize::deleteProductSize($product->id);
        ProductSubImage::deleteProductSubImage($product->id);
        return back()->with('message', 'Product info deleted successfully.!!!');
    }

    public function getSubCategoryByCategory()
    {

        $this->subCategories = SubCategory::where('category_id', $_GET['id'])->get();
        return response()->json($this->subCategories);
    }
}
