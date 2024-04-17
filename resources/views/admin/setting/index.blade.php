@extends('admin.master')

@section('title', 'Website Setting')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Setting Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Setting</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Setting</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Setting Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('setting.update', $setting->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="companyName" class="col-md-3 form-label">Company Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="companyName" name="company_name" value="{{ $setting->company_name }}" placeholder="Company Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="companySlogan" class="col-md-3 form-label">Company Slogan</label>
                            <div class="col-md-9">
                                <input class="form-control" id="companySlogan" name="slogan" value="{{ $setting->slogan }}" placeholder="Company Slogan" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="companyTitle" class="col-md-3 form-label">Company Title</label>
                            <div class="col-md-9">
                                <input class="form-control" id="companyTitle" name="title" value="{{ $setting->title }}" placeholder="Company Title" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="contactPhone" class="col-md-3 form-label">Contact Phone</label>
                            <div class="col-md-9">
                                <input class="form-control" id="contactPhone" name="contact_phone" value="{{ $setting->contact_phone }}" placeholder="Contact Phone" type="number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="supportPhone" class="col-md-3 form-label">Support Phone</label>
                            <div class="col-md-9">
                                <input class="form-control" id="supportPhone" name="support_phone" value="{{ $setting->support_phone }}" placeholder="Support Phone" type="number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="contactEmail" class="col-md-3 form-label">Contact Email</label>
                            <div class="col-md-9">
                                <input class="form-control" id="contactEmail" name="contact_email" value="{{ $setting->contact_email }}" placeholder="Contact Email" type="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="supportEmail" class="col-md-3 form-label">Support Email</label>
                            <div class="col-md-9">
                                <input class="form-control" id="supportEmail" name="support_email" value="{{ $setting->support_email }}" placeholder="Support Email" type="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="officeHour" class="col-md-3 form-label">Office Hour</label>
                            <div class="col-md-9">
                                <input class="form-control" id="officeHour" name="office_hour" value="{{ $setting->office_hour }}" placeholder="Office Hour" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="facebookLink" class="col-md-3 form-label">Facebook Link</label>
                            <div class="col-md-9">
                                <input class="form-control" id="facebookLink" name="facebook_link" value="{{ $setting->facebook_link }}" placeholder="Facebook Link" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="twitterLink" class="col-md-3 form-label">X Link</label>
                            <div class="col-md-9">
                                <input class="form-control" id="twitterLink" name="x_link" value="{{ $setting->x_link }}" placeholder="Twitter Link" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="linkedLink" class="col-md-3 form-label">Linked Link</label>
                            <div class="col-md-9">
                                <input class="form-control" id="linkedLink" name="linkedin_link" value="{{ $setting->linkedin_link }}"  placeholder="LinkedIn Link" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="youtubeLink" class="col-md-3 form-label">Youtube Link</label>
                            <div class="col-md-9">
                                <input class="form-control" id="youtubeLink" name="youtube_link" value="{{ $setting->youtube_link }}" placeholder="Youtube Link" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="instagramLink" class="col-md-3 form-label">Instagram Link</label>
                            <div class="col-md-9">
                                <input class="form-control" id="instagramLink" name="instagram_link" value="{{ $setting->instagram_link }}" placeholder="Instagram Link" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="googleMapApiLink" class="col-md-3 form-label">Google Map API Link</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="googleMapApiLink" name="google_map_api_link" placeholder="Google Map API Link">{{ $setting->google_map_api_link }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="androidAppImage" class="col-md-3 form-label">Android App Image</label>
                            <div class="col-md-6">
                                <input class="dropify" data-height="200" id="androidAppImage" name="android_app_image" type="file"/>
                                <img src="{{ asset($setting->android_app_image) }}" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="androidAppUrl" class="col-md-3 form-label">Android App Url</label>
                            <div class="col-md-9">
                                <input class="form-control" id="androidAppUrl" name="android_app_url" value="{{ $setting->android_app_url }}" type="text" placeholder="Android app url"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="androidAppImage" class="col-md-3 form-label">Ios App Image</label>
                            <div class="col-md-6">
                                <input class="dropify" data-height="200" id="androidAppImage" name="ios_app_image" type="file"/>
                                <img src="{{ asset($setting->ios_app_image) }}" alt=""/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="iosAppUrl" class="col-md-3 form-label">Ios App Url</label>
                            <div class="col-md-9">
                                <input class="form-control" id="iosAppUrl" name="ios_app_url" value="{{ $setting->ios_app_url }}" type="text" placeholder="IOS app url"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="companyAddress" class="col-md-3 form-label">Company Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="companyAddress" placeholder="Company Address" name="company_address">{{ $setting->company_address }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="logoJpg" class="col-md-3 form-label">LOGO JPG</label>
                            <div class="col-md-6">
                                <input class="dropify" data-height="200" id="logoJpg" name="logo_jpg" type="file"/>
                                <img src="{{ asset($setting->logo_jpg) }}" alt=""/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="logoPng" class="col-md-3 form-label">LOGO PNG</label>
                            <div class="col-md-6">
                                <input class="dropify" data-height="200" id="logoPng" name="logo_png" type="file"/>
                                <img src="{{ asset($setting->logo_png) }}" alt=""/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="favicon" class="col-md-3 form-label">Logo Favicon</label>
                            <div class="col-md-6">
                                <input class="dropify" data-height="200" id="favicon" name="favicon" type="file"/>
                                <img src="{{ asset($setting->favicon) }}" alt=""/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="paymentMethodImage" class="col-md-3 form-label">Payment Method Image</label>
                            <div class="col-md-6">
                                <input class="form-control-sm" id="paymentMethodImage" name="payment_method_image" type="file" multiple/>
                                <img src="{{ asset($setting->payment_method_image) }}" alt="">
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

