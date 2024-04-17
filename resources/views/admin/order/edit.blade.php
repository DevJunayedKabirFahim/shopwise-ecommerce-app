@extends('admin.master')
@section('title', 'Edit Order')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Order</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <div class="card-body">
                        <form action="{{ route('order.update', $order->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Customer Info</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $order->customer->name }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Order Total</label>
                                <div class="col-md-9">
                                    <input type="number" value="{{ $order->order_total }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Payment Method</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $order->payment_method }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Select Courier</label>
                                <div class="col-md-9 form-group">
                                    <select name="courier_id" class="form-control select2 form-select w-100" data-placeholder="Choose any courier">
                                        <option label="Choose one"></option>
                                        <option value="1" selected @selected($order->courier_id == 1)>REDX</option>
                                        <option value="2" @selected($order->courier_id == 2)>Sa Poribahan</option>
                                        <option value="3" @selected($order->courier_id == 3)>Shundorband</option>
                                        <option value="4" @selected($order->courier_id == 4)>Pathao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Delivery Address</label>
                                <div class="col-md-9">
                                    <textarea name="delivery_address" class="form-control" rows="3">{{ $order->delivery_address }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">Order Status</label>
                                <div class="col-md-9 form-group">
                                    <select name="order_status" class="form-control select2 form-select w-100" data-placeholder="Choose any one">
                                        <option label="Choose one"></option>
                                        <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                        <option value="Processing" @selected($order->order_status == 'Processing')>Processing</option>
                                        <option value="Completed" @selected($order->order_status == 'Completed')>Completed</option>
                                        <option value="Canceled" @selected($order->order_status == 'Canceled')>Canceled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary float-end">Update Order Info</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

