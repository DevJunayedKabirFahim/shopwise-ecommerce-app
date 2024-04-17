@extends('admin.master')

@section('title', 'Product Detail')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Detail Content</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>{{$product->code}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" height="130" width="150"/>
                            </td>
                        </tr>
                        <tr>
                            <th>Product Subimages</th>
                            <td>
                                @foreach($product->productSubImages as $productSubImage)
                                    <img src="{{asset($productSubImage->image)}}" alt="" height="130" width="150"/>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ isset($product->category->name) ? $product->category->name : ' ' }}</td>
                        </tr>
                        <tr>
                            <th>Sub-Category Name</th>
                            <td>{{ isset($product->subCategory->name) ? $product->subCategory->name : ' ' }}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{ isset($product->brand->name) ? $product->brand->name : ' ' }}</td>
                        </tr>
                        <tr>
                            <th>Unit Name</th>
                            <td>{{$product->unit->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Color</th>
                            <td>
                                @foreach($product->colors as $color)
                                    <span>{{ $color->color->name,' ' }}, </span>
                                @endforeach
                            </td>

                        </tr>
                        <tr>
                            <th>Product Size</th>
                            <td>
                                @foreach($product->sizes as $size)
                                    <span>{{ $size->size->name,' ' }}, </span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{$product->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>
                                <span>Regular Price: {{$product->regular_price}}</span><br/>
                                <span>Discounted Price: {{$product->selling_price}}</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Stock Amount</th>
                            <td>{{$product->stock_amount}}</td>
                        </tr>
                        <tr>
                            <th>Total Views</th>
                            <td>{{$product->hit_count}}</td>
                        </tr>
                        <tr>
                            <th>Total Sales</th>
                            <td>{{$product->sales_count}}</td>
                        </tr>
                        <tr>
                            <th>Featured Status</th>
                            <td>{{$product->feature_status == 1 ? 'Featured' : 'Not Featured'}}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        </tr>
                    </table>
                    <div>
                        <div class="d-flex p-3 br-5">
                            <div class="p-sm-4 p-2 ms-auto">
                                <a href="{{ route('vendor-product.index') }}" class="btn btn-primary"><i class="fe fe-log-out me-2"></i>Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
