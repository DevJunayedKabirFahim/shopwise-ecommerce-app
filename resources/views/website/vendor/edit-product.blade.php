@extends('website.master')
@section('title', 'Vendor Edit Product')
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
                        <li class="breadcrumb-item active">Edit Product</li>
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
                                <h3>Edit Product</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('vendor-product.index') }}" class="btn btn-success btn-sm float-end">All Product</a>
                            </div>
                        </div>
                        <hr/>
                        <p class="text-center text-success-dark">{{ session('message') }}</p>
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('vendor-product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Category</label>
                                        <div class="col-md-9">
                                            <select onchange="setSubCategory(this.value)" class="form-control" required name="category_id">
                                                <option value="" disabled selected> -- Select Product Category -- </option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Sub Category</label>
                                        <div class="col-md-9">
                                            <select id="subCategoryId" class="form-control" required name="sub_category_id">
                                                <option disabled selected> -- Select Product Sub Category -- </option>
                                                @foreach($sub_categories as $sub_category)
                                                    <option value="{{ $sub_category->id }}" @selected($sub_category->id == $product->sub_category_id)>{{ $sub_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Brand</label>
                                        <div class="col-md-9">
                                            <select class="form-control" required name="brand_id">
                                                <option disabled selected> -- Select Product Brand -- </option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Unit</label>
                                        <div class="col-md-9">
                                            <select class="form-control" required name="unit_id">
                                                <option value="" disabled selected> -- Select Product Unit -- </option>
                                                @foreach($units as $unit)
                                                    <option value="{{ $unit->id }}" @selected($unit->id == $product->unit_id)>{{ $unit->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Color</label>
                                        <div class="col-md-9">
                                            <select class="form-control js-example-basic-multiple" multiple="multiple" required name="colors[]">
                                                <optgroup label="Select available color(s)">
                                                    @foreach($colors as $color)
                                                        <option value="{{ $color->id }}" @foreach($product->colors as $singleColor) @selected($color->id == $singleColor->color_id) @endforeach>{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Size</label>
                                        <div class="col-md-9">
                                            <select class="form-control js-example-basic-multiple"  multiple="multiple" required name="sizes[]">
                                                <optgroup label="Select available size(s)">
                                                    @foreach($sizes as $size)
                                                        <option value="{{ $size->id }}" @foreach($product->sizes as $singleSize) @selected($size->id == $singleSize->size_id) @endforeach>{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="Product Name"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Code</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="{{ $product->code }}" name="code" placeholder="Product Code"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Short Description</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="short_description" value="{{ $product->short_description }}" placeholder="Enter short description of product">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="long_description">{{ $product->long_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image"/>
                                            <img src="{{ asset($product->image) }}" alt="" height="120" width="130"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Sub Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="sub_Images[]" multiple/>
                                            @foreach($product->productSubImages as $productSubImage)
                                                <img src="{{ asset($productSubImage->image) }}" alt="" height="120" width="130"/>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Price</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="{{ $product->regular_price }}" name="regular_price" placeholder="Regular Price"/>
                                                <input type="number" class="form-control" value="{{ $product->selling_price }}" name="selling_price" placeholder="Selling Price"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-md-3">Product Stock Amount</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" value="{{ $product->stock_amount }}" name="stock_amount" placeholder="Enter stock amount"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9 d-flex">
                                            <input type="submit" class="btn btn-success float-end" value="Update Product Info"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
