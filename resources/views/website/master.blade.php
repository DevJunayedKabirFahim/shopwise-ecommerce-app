<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- SITE TITLE -->
    <title>{{ $setting->company_name }} - @yield('title')</title>

    @include('website.includes.meta')
    @include('website.includes.style')
</head>

<body>

@include('website.includes.header')
@yield('breadcrumb')

<!-- END MAIN CONTENT -->
<div class="main_content">

    @yield('body')

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="newsletter_text text_white">
                        <h3>Join Our Newsletter Now</h3>
                        <p> Register now to get updates on promotions. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form2">
                        <form>
                            <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>
