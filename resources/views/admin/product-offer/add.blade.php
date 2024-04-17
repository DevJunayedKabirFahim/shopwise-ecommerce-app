@extends('admin.master')
@section('title', 'Add Offer')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Offer Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Offer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Offer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Offer Form</h3>
                    <a href="{{ route('product-offer.index') }}" class="btn btn-primary-gradient ms-auto">Manage Product Offers</a>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('product-offer.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Product</label>
                            <div class="col-md-9 form-group">
                                <select name="product_id" class="form-control select2-show-search form-select w-100" data-placeholder="Choose any Product">
                                    <option label="Choose one"></option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('product_id') ? $errors->first('product_id') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title_one" class="col-md-3 form-label">Title One</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title_one" placeholder="Enter first title of banner"/>
                                <span class="text-white bg-danger">{{ $errors->has('title_one') ? $errors->first('title_one') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title_two" class="col-md-3 form-label">Title Two</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title_two" placeholder="Enter Second title of banner"/>
                                <span class="text-white bg-danger">{{ $errors->has('title_two') ? $errors->first('title_two') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Description</label>
                            <div class="col-md-9">
                                <div class="card card-body">
                                    <textarea class="content" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="discount_amount" class="col-md-3 form-label">Discount Amount</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="discount_amount" name="discount_amount" placeholder="Enter Discount amount"/>
                                <span class="text-white bg-danger">{{ $errors->has('discount_amount') ? $errors->first('discount_amount') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Banner Image</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="dropify" data-height="200" />
                                <span class="text-white bg-danger">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3 form-label">Status</label>
                            <div class="col-md-3 pt-3">
                                <label><input name="status" type="radio" checked  value="1"> <span>Published</span></label>
                                <label><input name="status" type="radio" value="0"> <span>Unpublished</span></label>
                            </div>
                            <div class="col-md-3 pt-3">
                                <span class="text-white bg-danger">{{ $errors->has('status') ? $errors->first('status') : ' ' }}</span>
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group">
                                <label class="ckbox">
                                    <input type="checkbox"><span class="text-13">I agree terms and conditions</span>
                                </label>
                            </div>
                        </div>--}}
                        <button class="btn btn-primary float-end" type="submit">Create new Offer Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
