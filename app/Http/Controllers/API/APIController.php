<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $searchText = '';
    private $products ='';
    public function getProductBySearchText()
    {
        $this->searchText = $_GET['search_text'];
        $this->products = Product::where('status', 1)->where('name', 'LIKE', "%{$this->searchText}%")->get();
        foreach ($this->products as $product) {
            $product->image = asset($product->image);
        }
        return response()->json($this->products);
    }
}
