@extends('admin.master')
@section('title', 'Edit Color')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Color Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Color</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Color</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Color Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('color.update', $color->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Color Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" value="{{ $color->name }}" placeholder="Enter Color Name" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code" class="col-md-3 form-label">Color Code</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input class="form-control" id="code" name="code" value="{{ $color->code }}" type="color"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" maxlength="225"  name="description" id="description" placeholder="Enter color description" rows="3">{{ $color->description }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-3 form-label">Status</label>
                            <div class="col-md-3 pt-3">
                                <label><input name="status" type="radio" {{ $color->status == 1 ? 'checked' : '' }} value="1"> <span>Published</span></label>
                                <label><input name="status" type="radio" {{ $color->status == 0 ? 'checked' : '' }} value="0"> <span>Unpublished</span></label>
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
                        <button class="btn btn-primary float-end" type="submit">Update Color Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
