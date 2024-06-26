@extends('admin.master')
@section('title', 'Add User')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add User Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>
                    <form class="form-horizontal" method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">User Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter User Name" type="text">
                                <span class="text-white bg-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">User Email</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter User email address" type="email">
                                <span class="text-white bg-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">User Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter User password" type="password">
                                <span class="text-white bg-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">User Mobile</label>
                            <div class="col-md-9">
                                <input class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter User mobile" type="number">
                                <span class="text-white bg-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Select Role</label>
                            <div class="col-md-9 form-group">
                                <select name="role" required="You need to select role" class="form-control select2 form-select w-100" data-placeholder="Choose user access level">
                                    <option label="Choose one"></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Manager</option>
                                    <option value="3">Executive</option>
                                </select>
                                <span class="text-white bg-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">User Image</label>
                            <div class="col-sm-12 col-md-5 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="dropify" data-height="200" />
                            </div>
                        </div>
                        <button class="btn btn-primary float-end" type="submit">Create new User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
