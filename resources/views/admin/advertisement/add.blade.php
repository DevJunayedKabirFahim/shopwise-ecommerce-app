@extends('admin.master')
@section('title', 'Add Advertisement')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Advertisement Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advertisement</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Advertisement</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Advertisement Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('advertisement.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label id="productId" class="col-md-3 form-label">Select Product</label>
                            <div class="col-md-9 form-group">
                                <select id="productId" name="product_id" class="form-control select2-show-search form-select w-100" data-placeholder="Choose any Product">
                                    <option label="Choose one"></option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('product_id') ? $errors->first('product_id') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title" class="col-md-3 form-label">Advertisement Title</label>
                            <div class="col-md-9">
                                <input class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Advertisement title" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('title') ? $errors->first('title') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="subTitle" class="col-md-3 form-label">Advertisement Subtitle</label>
                            <div class="col-md-9">
                                <input class="form-control" id="subTitle" name="sub_title" value="{{ old('sub_title') }}" placeholder="Enter Advertisement subtitle" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('sub_title') ? $errors->first('sub_title') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="position" class="col-md-3 form-label">Advertisement Position</label>
                            <div class="col-md-9">
                                <input class="form-control" id="position" name="position" value="{{ old('position') }}" placeholder="Enter Advertisement position" type="number">
                                <span class="text-white bg-danger">{{ $errors->has('position') ? $errors->first('position') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="offerPrice" class="col-md-3 form-label">Advertisement Offer Price</label>
                            <div class="col-md-9">
                                <input class="form-control" id="offerPrice" name="offer_price" value="{{ old('offer_price') }}" placeholder="Enter Advertisement offer price" type="number">
                                <span class="text-white bg-danger">{{ $errors->has('offer_price') ? $errors->first('offer_price') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="discount" class="col-md-3 form-label">Advertisement Discount</label>
                            <div class="col-md-9">
                                <input class="form-control" id="discount" name="discount" value="{{ old('discount') }}" placeholder="Enter Advertisement discount" type="number">
                                <span class="text-white bg-danger">{{ $errors->has('discount') ? $errors->first('discount') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Advertisement Image</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="dropify" data-height="200" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3 form-label">Status</label>
                            <div class="col-md-3 pt-3">
                                <label><input name="status" type="radio" value="1"> <span>Published</span></label>
                                <label><input name="status" checked type="radio" value="0"> <span>Unpublished</span></label>
                            </div>
                            <div class="col-md-3 pt-3">
                                <span class="text-white bg-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group">
                                <label class="ckbox">
                                    <input type="checkbox"><span class="text-13">I agree terms and conditions</span>
                                </label>
                            </div>
                        </div>--}}
                        <button class="btn btn-primary float-end" type="submit">Create new advertisement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
