@extends('website.master')
@section('title', 'Vendor Manage Product')
@section('breadcrumb')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Vendor Account</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Vendor</a></li>
                        <li class="breadcrumb-item active">Manage Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->
@endsection
@section('body')
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('website.vendor.vendor-menu')
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col">
                                <h3>All Product</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('vendor-product.create') }}" class="btn btn-success btn-sm float-end">Add Product</a>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <p class="text-center text-success">{{ session('message') }}</p>
                            <div class="col">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Stock Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->selling_price }}</td>
                                        <td>{{ $product->stock_amount }}</td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('vendor-product.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('vendor-product.destroy', $product->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
    </div>
    <!-- END SECTION SHOP -->
@endsection
