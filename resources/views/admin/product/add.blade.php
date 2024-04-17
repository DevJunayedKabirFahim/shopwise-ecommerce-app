@extends('admin.master')
@section('title', 'Add Product')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Category</label>
                            <div class="col-md-9 form-group">
                                <select name="category_id" onchange="setSubCategory(this.value)" class="form-control select2-show-search form-select w-100" data-placeholder="Choose any category">
                                    <option label="Choose one"></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select SubCategory</label>
                            <div class="col-md-9 form-group">
                                <select name="sub_category_id" id="subCategoryId" class="form-control select2 form-select w-100" data-placeholder="Choose any subcategory">
                                    <option label="Choose one"></option>
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}">{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('sub_category_id') ? $errors->first('sub_category_id') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Brand</label>
                            <div class="col-md-9 form-group">
                                <select name="brand_id" class="form-control select2-show-search form-select w-100" data-placeholder="Choose any brand">
                                    <option label="Choose one"></option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Unit</label>
                            <div class="col-md-9 form-group">
                                <select name="unit_id" class="form-control select2-show-search form-select w-100" data-placeholder="Choose any unit">
                                    <option label="Choose one"></option>
                                    @foreach($units as $unit)
                                        <option value="{{ $unit->id }}">{{$unit->code}}</option>
                                    @endforeach
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('unit_id') ? $errors->first('unit_id') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Colors</label>
                            <div class="col-md-9 form-group">
                                    <select multiple class="form-control select2-show-search form-select" name="colors[]" data-placeholder="Choose colors">
                                        <option label="Choose one"></option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <span class="text-white bg-danger">{{ $errors->has('color_id') ? $errors->first('color_id') : ''}}</span>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Select Size</label>
                            <div class="col-md-9 form-group">
                                <select multiple class="form-control select2-show-search form-select" name="sizes[]" data-placeholder="Choose sizes">
                                    <option label="Choose one"></option>
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}">{{$size->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter product Name" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input class="form-control" id="code" name="code" value="{{ old('code') }}" placeholder="Enter product code" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('code') ? $errors->first('code') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="short_description" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" maxlength="225"  name="short_description" id="short_description" placeholder="Enter product short description" rows="2">{{ old('short_description') }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="long_description" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <div class="card card-body">
                                    <textarea class="content" name="long_description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="dropify" data-height="200" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Sub Images</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input type="file" name="sub_Images[]" class="form-control"  multiple/>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Price</label>
                            <div class="col-sm-12 col-md-9 mg-t-10 mg-sm-t-0">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="regular_price" placeholder="Enter regular price"/>
                                    <input type="number" class="form-control" name="selling_price" placeholder="Enter discounted price"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label id="stock_amount" class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-sm-12 col-md-9 mg-t-10 mg-sm-t-0">
                                <input id="stock_amount" type="number" class="form-control" name="stock_amount" placeholder="Enter stock amount"/>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3 form-label">Status</label>
                            <div class="col-md-3 pt-3">
                                <label><input name="status" checked type="radio" value="1"> <span>Published</span></label>
                                <label><input name="status" type="radio" value="0"> <span>Unpublished</span></label>
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
                        <button class="btn btn-primary float-end" type="submit">Create new Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
