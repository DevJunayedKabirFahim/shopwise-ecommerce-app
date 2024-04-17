@extends('admin.master')
@section('title', 'Manage Advertisements')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Advertisement Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advertisement</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Advertisement</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Manage all Advertisements</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{ session('message') }}</p>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">SL NO</th>
                                    <th class="border-bottom-0">Product Info</th>
                                    <th class="border-bottom-0">Ad Title</th>
                                    <th class="border-bottom-0">Image</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($advertisements as $advertisement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $advertisement->product->name }}</td>
                                        <td>{{ $advertisement->title }}</td>
                                        <td>
                                            <img src="{{ asset($advertisement->image) }}" alt="" height="50" width="70"/>
                                        </td>
                                        <td>{{ $advertisement->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('advertisement.show', $advertisement->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-book"></i>
                                            </a>
                                            <a href="{{ route('advertisement.edit', $advertisement->id) }}" class="btn btn-sm btn-success ms-2">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <form action="{{ route('advertisement.destroy', $advertisement->id) }}" method="post">
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

