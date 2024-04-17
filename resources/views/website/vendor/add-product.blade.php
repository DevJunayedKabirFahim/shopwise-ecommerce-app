@extends('website.master')
@section('title', 'Vendor Add Product')
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
                        <li class="breadcrumb-item active">Add Product</li>
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
                                <h3>Add Product</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('vendor-product.index') }}" class="btn btn-success btn-sm float-end">All Product</a>
                            </div>
                        </div>
                        <hr/>
                        <p class="text-center text-success-dark">{{ session('message') }}</p>
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('vendor-product.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Category</label>
                                        <div class="col-md-9">
                                            <select onchange="setSubCategory(this.value)" class="form-control" required name="category_id">
                                                <option value="" disabled selected> -- Select Product Category -- </option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
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
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
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
                                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
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
                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
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
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Product Name"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Code</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="code" placeholder="Product Code"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Short Description</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="short_description" placeholder="Enter short description of product">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="long_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Sub Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="sub_Images[]" multiple/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Product Price</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="regular_price" placeholder="Regular Price"/>
                                                <input type="number" class="form-control" name="selling_price" placeholder="Selling Price"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-md-3">Product Stock Amount</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="stock_amount" placeholder="Enter stock amount"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success float-end" value="Create New Product"/>
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
