@extends('admin.master')
@section('title', 'Manage User')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Manage all Users</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">SL NO</th>
                                    <th class="border-bottom-0">User Name</th>
                                    <th class="border-bottom-0">User Email</th>
                                    <th class="border-bottom-0">Image</th>
                                    <th class="border-bottom-0">Mobile</th>
                                    <th class="border-bottom-0">User Role</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <img src="{{ asset($user->profile_photo_path) }}" alt="" height="40" width="60"/>
                                        </td>
                                        <td>{{ $user->mobile}}</td>
                                        <td>
                                            @if($user->role == 1)
                                                Admin
                                            @elseif($user->role == 2)
                                                Manager
                                            @elseif($user->role == 3)
                                                Executive
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you want to delete user?')" class="ms-2 btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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

