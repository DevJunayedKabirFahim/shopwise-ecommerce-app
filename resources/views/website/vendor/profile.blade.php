@extends('website.master')
@section('title', 'Vendor Profile')
@section('breadcrumb')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Vendor Profile</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Vendor</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                        <h2>Vendor Profile</h2>
                        <hr/>
                        <p class="text-center text-success">{{ session('message') }}</p>
                        <form action="{{ route('vendor.profile.update', ['id' => $vendor->id]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                    <label>Full Name <span class="required">*</span></label>
                                    <input required="Your Name" class="form-control" name="name" value="{{ $vendor->name }}" type="text">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Mobile Number<span class="required">*</span></label>
                                    <input required="Your mobile" class="form-control" name="mobile" value="{{ $vendor->mobile }}" type="number">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input required="Your Email" class="form-control" name="email" value="{{ $vendor->email }}" type="email">
                                </div>
                                {{--<div class="form-group col-md-12 mb-3">
                                    <label>Password <span class="required">*</span></label>
                                    <input required="Your password" class="form-control" name="password" type="password">
                                </div>--}}
                                <div class="form-group col-md-12 mb-3">
                                    <label>Address <span class="required">*</span></label>
                                    <textarea class="form-control" name="address" id="" cols="15" rows="5">{{ $vendor->address }}</textarea>
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Profile Picture <span class="required">*</span></label>
                                    <input class="form-control" name="image" type="file">
                                    @if(isset($vendor->image))
                                        <img src="{{ asset($vendor->image) }}" alt="" height="120" width="130" class="mt-2"/>
                                    @endif
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Date of Birth <span class="required">*</span></label>
                                    <input class="form-control" name="date_of_birth" value="{{ $vendor->date_of_birth }}" type="date">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Blood Group <span class="required">*</span></label>
                                    <input  class="form-control" name="blood_group" value="{{ $vendor->blood_group }}" type="text">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>National Identity Number <span class="required">*</span></label>
                                    <input  class="form-control" name="nid" value="{{ $vendor->nid }}" type="number">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>District <span class="required">*</span></label>
                                    <input class="form-control" name="district" value="{{ $vendor->district }}" type="text">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-fill-out float-end">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
