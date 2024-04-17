@extends('admin.master')
@section('title', 'Manage Orders')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Orders</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Manage all Orders</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">SL NO</th>
                                    <th class="border-bottom-0">Order Id</th>
                                    <th class="border-bottom-0">Order Total</th>
                                    <th class="border-bottom-0">Order Date</th>
                                    <th class="border-bottom-0">Order Status</th>
                                    <th class="border-bottom-0">Customer Info</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>#{{ $order->id }}</td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>{{ $order->customer->name.'('.$order->customer->mobile.')' }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('order.show', $order->id) }}" class="btn btn-sm btn-info" title="View Order Detail">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('order.edit', $order->id) }}" class="ms-2 btn btn-sm btn-success {{ $order->order_status == 'Completed' || $order->order_status == 'Canceled' ? 'disabled' : '' }}" title="Order Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('order.invoice-show', ['id' => $order->id]) }}" class="ms-2 btn btn-sm btn-primary" title="View Order Invoice">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{ route('order.invoice-download', ['id' => $order->id]) }}" target="_blank" class="ms-2 btn btn-sm btn-success" title="Download Order Invoice">
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" title="Delete Order" onclick="return confirm('Are you want to delete this?')" class="ms-2 btn btn-sm btn-danger {{ $order->order_status == 'Completed' ? 'disabled' : '' }}"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

