<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.order.index', ['orders' => Order::orderBy('id', 'desc')->get()]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.order.show', ['order' => Order::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.order.edit', ['order' => Order::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Order::updateOrder($request, $id);
        return redirect(route('order.index'))->with('message', 'Order info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetailInfo($id);
        return back()->with('message', 'Order removed from the database successfully.');
    }

    public function showInvoice(string $id)
    {
        return view('admin.order.invoice-show', ['order' => Order::find($id)]);
    }
    public function downloadInvoice(string $id)
    {
        $pdf = PDF::loadView('admin.order.invoice-download', ['order' => Order::find($id)]);
        return $pdf->stream();
    }
}
