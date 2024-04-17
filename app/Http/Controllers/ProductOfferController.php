<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOffer;
use Illuminate\Http\Request;

class ProductOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product-offer.index', ['product_offers' => ProductOffer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-offer.add', ['products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'title_one' => 'required',
            'title_two' => 'required',
            'image' => 'required',
            'status' => 'required',
        ],[
            'product_id.required' => 'Please select a product for offer first *',
            'title_one.required' => 'Please give first title for offer *',
            'title_two.required' => 'Please give second title for offer *',
            'image.required' => 'Please give banner image for offer *',
            'status.required' => 'Please select publication status for offer *',
        ]);
        ProductOffer::newProductOffer($request);
        return back()->with('message', 'Product offer info inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOffer $productOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductOffer $productOffer)
    {
        return view('admin.product-offer.edit', [
            'productOffer' => $productOffer,
            'products' => Product::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductOffer $productOffer)
    {
        ProductOffer::updateProductOffer($request, $productOffer);
        return redirect('/product-offer')->with('message', 'Product offer info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductOffer $productOffer)
    {
        ProductOffer::deleteProductOffer($productOffer);
        return back()->with('message', 'Product offer deleted successfully.');
    }
}
