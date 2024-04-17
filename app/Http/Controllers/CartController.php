<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $product;
    public function index()
    {
        return view('website.cart.index', [
            'products' => Cart::content(),
        ]);
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
        self::$product = Product::find($request->id);
        Cart::add([
            'id'    => $request->id,
            'name'  => self::$product->name,
            'qty'   => $request->quantity,
            'price' => self::$product->selling_price,
            'options' => [
                'image' => self::$product->image,
                'code' => self::$product->code,
                'size' => $request->size,
                'color' => $request->color
            ]
        ]);
        return redirect(route('cart.index'))->with('message', 'Product added to cart successfully.!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function updateCart(Request $request)
    {
        foreach ($request->quantity as $item)
        {
            Cart::update($item['rowId'], $item['qty']);
        }
        return redirect('/cart')->with('message', 'Cart item quantity updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function deleteCart(string $rowId)
    {
        Cart::remove($rowId);
        return back()->with('message', 'Item removed from cart successfully.');
    }

    public function clearCart()
    {
        Cart::destroy();
        return back()->with('message', 'Cart cleared completely.');
    }
}
