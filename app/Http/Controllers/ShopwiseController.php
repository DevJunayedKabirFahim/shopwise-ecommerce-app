<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOffer;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ShopwiseController extends Controller
{
    private $product, $productOffer, $discount;
    public function index()
    {
        return view('website.home.index',[
            'products' => Product::where('featured_status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'product_offers' => ProductOffer::where('status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'vendor_products' => Product::whereNot('vendor_id', 0)->where('status', 1)->orderBy('id', 'desc')->take(10)->get(),
            'categories' => Category::inRandomOrder()->where('status', 1)->take(8)->get()
        ]);
    }

    public function category($id)
    {
        return view('website.category.index', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function subCategory($id)
    {
        return view('website.category.index', [
            'products' => Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function product($id)
    {
        $this->product = Product::find($id);
        $this->productOffer = ProductOffer::where('product_id', $id)->orderBy('id', 'desc')->first();
        if ($this->productOffer)
        {
            $this->discount = $this->productOffer;
        }
        else
        {
            $this->discount = '';
        }
        return view('website.product.index', [
            'product' => Product::find($id),
            'discount' => $this->discount
        ]);
    }
}
