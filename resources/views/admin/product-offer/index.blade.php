@extends('admin.master')
@section('title', 'Manage Offer')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Offer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Offer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Offer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Manage all Offers</h3>
                    <a href="{{ route('product-offer.create') }}" class="btn btn-primary-gradient ms-auto">Add New Product Offer</a>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">SL NO</th>
                                    <th class="border-bottom-0">Product Name</th>
                                    <th class="border-bottom-0">Title One</th>
                                    <th class="border-bottom-0">Title Two</th>
                                    <th class="border-bottom-0">Image</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product_offers as $product_offer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product_offer->product->name }}</td>
                                        <td>{{ $product_offer->title_one }}</td>
                                        <td>{{ $product_offer->title_two }}</td>
                                        <td>
                                            <img src="{{ asset($product_offer->image) }}" alt="" height="50" width="70"/>
                                        </td>
                                        <td>{{ $product_offer->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('product-offer.edit', $product_offer->id) }}" class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('product-offer.destroy', $product_offer->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you want to delete this?')" class="ms-2 btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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

