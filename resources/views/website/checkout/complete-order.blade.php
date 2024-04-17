@extends('website.master')
@section('title', 'Order Completed')
@section('breadcrumb')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Order Completed</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Order Completed</li>
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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center order_complete">
                        <i class="fas fa-check-circle"></i>
                        <div class="heading_s1">
                            <h3>Your order is completed!</h3>
                        </div>
                        <p>{{ session('message') }}</p>
                        <a href="{{ route('home') }}" class="btn btn-fill-out">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

@endsection
