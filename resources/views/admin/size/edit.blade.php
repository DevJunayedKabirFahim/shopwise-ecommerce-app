@extends('admin.master')
@section('title', 'Edit Size')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Size Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Size</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Size</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Size Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('size.update', $size->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Size Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" value="{{ $size->name }}" placeholder="Enter Size Name" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Size Code</label>
                            <div class="col-md-9">
                                <input class="form-control" id="code" name="code" value="{{ $size->code }}" placeholder="Enter size code " type="text">
                                <span class="text-white bg-danger">{{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" maxlength="225"  name="description" id="description" placeholder="Enter size description" rows="3">{{ $size->description }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3 form-label">Status</label>
                            <div class="col-md-3 pt-3">
                                <label><input name="status" type="radio" {{ $size->status == 1 ? 'checked' : '' }} value="1"> <span>Published</span></label>
                                <label><input name="status" type="radio" {{ $size->status == 0 ? 'checked' : '' }} value="0"> <span>Unpublished</span></label>
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
                        <button class="btn btn-primary float-end" type="submit">Update size info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
