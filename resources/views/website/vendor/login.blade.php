@extends('website.master')
@section('title', 'Login')
@section('breadcrumb')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Vendor Login</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Vendor Login</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

@endsection
@section('body')
    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Login</h3>
                            </div>
                            <p class="text-center text-danger">{{ session('message') }}</p>
                            <form action="{{ route('vendor-login-check') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" required="" class="form-control" name="user_name" placeholder="Your Email or Phone"/>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password"/>
                                </div>
                                <div class="login_footer form-group mb-3">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-fill-out btn-block">Log in</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Don't Have an Account? <a href="{{ route('vendor-register') }}">Become a Vendor</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->
@endsection
