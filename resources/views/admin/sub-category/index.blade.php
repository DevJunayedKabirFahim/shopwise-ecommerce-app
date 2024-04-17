@extends('admin.master')
@section('title', 'Manage Subcategory')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Subcategory Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Subcategory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Subcategory</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Manage all Subcategories</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">SL NO</th>
                                    <th class="border-bottom-0">Category</th>
                                    <th class="border-bottom-0">SubCategory</th>
                                    <th class="border-bottom-0">Image</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sub_categories as $subCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ isset($subCategory->category->name) ? $subCategory->category->name : 'Not found' }}</td>
                                    <td>{{ $subCategory->name }}</td>
                                    <td>
                                        <img src="{{ asset($subCategory->image) }}" alt="" height="50" width="70"/>
                                    </td>
                                    <td>{{ $subCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('sub-category.edit', $subCategory->id) }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('sub-category.destroy', $subCategory->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger ms-2" onclick="return confirm('Are you sure want to delete this?')"><i class="fa fa-trash"></i></button>
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

