@extends('website.master')
@section('title', 'Register new vendor')
@section('breadcrumb')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- START CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Vendor Register</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Vendor Register</li>
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
                                <h3>Create an Account</h3>
                            </div>
                            <form action="{{ route('new-vendor') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" required="" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter Your Name">
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" required="" class="form-control" value="{{ old('email') }}" name="email" placeholder="Enter Your Email Address">
                                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="number" required="" class="form-control" value="{{ old('mobile') }}" name="mobile" placeholder="Enter Your Phone">
                                    <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : ' ' }}</span>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                                </div>
                                <div class="login_footer form-group mb-3">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" checked id="exampleCheckbox2" value="">
                                            <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-fill-out btn-block">Register</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Already have an account? <a href="{{ route('vendor-login') }}">Log in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->

@endsection
