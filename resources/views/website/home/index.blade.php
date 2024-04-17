@extends('website.master')
@section('title' , "BANGLADESH's LARGEST E-COMMERCE WEBSITE - BUY NOW")
@section('breadcrumb')

    <!-- START SECTION BANNER -->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap" id="searchContent">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($product_offers as $product_offer)
                    <div class="carousel-item background_bg active" data-img-src="{{ asset($product_offer->image) }}">
                        <div class="banner_slide_content banner_content_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-10">
                                        <div class="banner_content overflow-hidden">
                                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">{{ $product_offer->title_one }}</h2>
                                            <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s">{{$product_offer->title_two}}</h5>
                                            <a class="btn btn-fill-out staggered-animation text-uppercase" href="{{ route('product-detail', $product_offer->product_id) }}" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->

@endsection
@section('body')
    <!-- START SECTION BANNER -->
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('/') }}website/assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('/') }}website/assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('/') }}website/assets/images/shop_banner_img9.jpg" alt="shop_banner_img9">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- START SECTION CATEGORIES -->
    <div class="section small_pb small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s4 text-center">
                        <h2>Top Categories</h2>
                    </div>
                    <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                        @foreach($categories as $category)
                        <div class="item">
                            <div class="categories_box">
                                <a href="{{ route('product-category', ['id' => $category->id]) }}">
                                    <img src="{{ asset($category->image) }}" alt="category_image"/>
                                    <span>{{ $category->name }}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CATEGORIES -->


    <!-- START SECTION SHOP -->
    <div class="section small_pt small_pb">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="sale-banner">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('/') }}website/assets/images/shop_banner_img10.jpg" alt="shop_banner_img10">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h4>Hot Arrival products</h4>
                                </div>
                                <div class="view_all">
                                    <a href="#" class="text_default"><i class="linearicons-power"></i> <span>View All</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                @foreach($vendor_products as $vendor_product)
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="{{ route('product-detail', ['id' => $vendor_product->id]) }}">
                                                <img src="{{ asset($vendor_product->image) }}">
                                                @foreach($vendor_product->productSubImages as $productSubImage)
                                                <img class="product_hover_img" src="{{ asset($productSubImage->image) }}" alt="el_hover_img2">
                                                @endforeach
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="{{ route('product-detail', ['id' => $vendor_product->id]) }}">{{ $vendor_product->name }}</a></h6>
                                            <div class="product_price">
                                                <span class="price">${{ $vendor_product->selling_price }}</span>
                                                <del>${{ $vendor_product->regular_price }}</del>
                                                {{--<div class="on_sale">
                                                    <span>25% Off</span>
                                                </div>--}}
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
                                                <span class="rating_num">(15)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>{{ $vendor_product->short_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->


    <!-- START SECTION SHOP -->
    <div class="section pt-0 pb-0">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h4>Deal Of The Day</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style3" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "650":{"items": "2"}, "1199":{"items": "2"}}'>
                        <div class="item">
                            <div class="deal_wrap">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('/') }}website/assets/images/el_img1.jpg" alt="el_img1">
                                    </a>
                                </div>
                                <div class="deal_content">
                                    <div class="product_info">
                                        <h5 class="product_title"><a href="shop-product-detail.html">Red & Black Headphone</a></h5>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                        </div>
                                    </div>
                                    <div class="deal_progress">
                                        <span class="stock-sold">Already Sold: <strong>6</strong></span>
                                        <span class="stock-available">Available: <strong>8</strong></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
                                        </div>
                                    </div>
                                    <div class="countdown_time countdown_style4 mb-4" data-time="2021/10/02 12:30:15"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="deal_wrap">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('/') }}website/assets/images/el_img2.jpg" alt="el_img2">
                                    </a>
                                </div>
                                <div class="deal_content">
                                    <div class="product_info">
                                        <h5 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a></h5>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                        </div>
                                    </div>
                                    <div class="deal_progress">
                                        <span class="stock-sold">Already Sold: <strong>4</strong></span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:26%"> 26% </div>
                                        </div>
                                    </div>
                                    <div class="countdown_time countdown_style4 mb-4" data-time="2021/09/02 12:30:15"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="deal_wrap">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('/') }}website/assets/images/el_img3.jpg" alt="el_img3">
                                    </a>
                                </div>
                                <div class="deal_content">
                                    <div class="product_info">
                                        <h5 class="product_title"><a href="shop-product-detail.html">Nikon HD camera</a></h5>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.25</del>
                                        </div>
                                    </div>
                                    <div class="deal_progress">
                                        <span class="stock-sold">Already Sold: <strong>16</strong></span>
                                        <span class="stock-available">Available: <strong>20</strong></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width:28%"> 28% </div>
                                        </div>
                                    </div>
                                    <div class="countdown_time countdown_style4 mb-4" data-time="2021/11/02 12:30:15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION SHOP -->
    <div class="section small_pb small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Special Offer
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_slider tab-content">
                        <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                @foreach($products as $product)
                                <div class="item">
                                    <div class="product_wrap">
                                        <span class="pr_flash">New</span>
                                        <div class="product_img">
                                            <a href="{{ route('product-detail', $product->id) }}">
                                                <img src="{{ asset($product->image) }}" alt="el_img3">
                                                @foreach($product->productSubImages as $productSubImage)
                                                    <img class="product_hover_img" src="{{ asset($productSubImage->image)}}" alt="el_hover_img3">
                                                @endforeach

                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="{{ route('product-detail', $product->id) }}">{{ $product->name }}</a></h6>
                                            <div class="product_price">
                                                <span class="price">${{ $product->selling_price }}</span>
                                                <del>${{ $product->regular_price }}</del>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:87%"></div>
                                                </div>
                                                <span class="rating_num">(25)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img7.jpg" alt="el_img7">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <span class="pr_flash bg-danger">Hot</span>
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img8.jpg" alt="el_img8">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg" alt="el_hover_img8">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                            <div class="product_price">
                                                <span class="price">$55.00</span>
                                                <del>$95.00</del>
                                                <div class="on_sale">
                                                    <span>25% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
                                                <span class="rating_num">(15)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img9.jpg" alt="el_img9">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg" alt="el_hover_img9">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                            <div class="product_price">
                                                <span class="price">$68.00</span>
                                                <del>$99.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:87%"></div>
                                                </div>
                                                <span class="rating_num">(25)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <span class="pr_flash bg-success">Sale</span>
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img10.jpg" alt="el_img10">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img10.jpg" alt="el_hover_img10">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">classical Headphone</a></h6>
                                            <div class="product_price">
                                                <span class="price">$68.00</span>
                                                <del>$99.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:87%"></div>
                                                </div>
                                                <span class="rating_num">(25)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img11.jpg" alt="el_img11">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed HDMI</a></h6>
                                            <div class="product_price">
                                                <span class="price">$69.00</span>
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:70%"></div>
                                                </div>
                                                <span class="rating_num">(22)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img12.jpg" alt="el_img12">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for Low</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                <div class="item">
                                    <div class="product_wrap">
                                        <span class="pr_flash bg-danger">Hot</span>
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img8.jpg" alt="el_img8">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg" alt="el_hover_img8">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                            <div class="product_price">
                                                <span class="price">$55.00</span>
                                                <del>$95.00</del>
                                                <div class="on_sale">
                                                    <span>25% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
                                                <span class="rating_num">(15)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img4.jpg" alt="el_img4">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img4.jpg" alt="el_hover_img4">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Audio Equipment</a></h6>
                                            <div class="product_price">
                                                <span class="price">$69.00</span>
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:70%"></div>
                                                </div>
                                                <span class="rating_num">(22)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img11.jpg" alt="el_img11">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed HDMI</a></h6>
                                            <div class="product_price">
                                                <span class="price">$69.00</span>
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:70%"></div>
                                                </div>
                                                <span class="rating_num">(22)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img1.jpg" alt="el_img1">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img1.jpg" alt="el_hover_img1">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Red & Black Headphone</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img7.jpg" alt="el_img7">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <span class="pr_flash bg-danger">Hot</span>
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img6.jpg" alt="el_img6">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img6.jpg" alt="el_hover_img6">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Samsung Smart Phone</a></h6>
                                            <div class="product_price">
                                                <span class="price">$55.00</span>
                                                <del>$95.00</del>
                                                <div class="on_sale">
                                                    <span>25% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
                                                <span class="rating_num">(15)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img2.jpg" alt="el_img2">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img2.jpg" alt="el_hover_img2">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a></h6>
                                            <div class="product_price">
                                                <span class="price">$55.00</span>
                                                <del>$95.00</del>
                                                <div class="on_sale">
                                                    <span>25% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
                                                <span class="rating_num">(15)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img5.jpg" alt="el_img5">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img9.jpg" alt="el_img9">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg" alt="el_hover_img9">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                            <div class="product_price">
                                                <span class="price">$68.00</span>
                                                <del>$99.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:87%"></div>
                                                </div>
                                                <span class="rating_num">(25)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img7.jpg" alt="el_img7">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img5.jpg" alt="el_img5">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img src="{{ asset('/') }}website/assets/images/el_img12.jpg" alt="el_img12">
                                                <img class="product_hover_img" src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for Low</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION BANNER -->
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('/') }}website/assets/images/shop_banner_img11.png" alt="shop_banner_img11">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- START SECTION TESTIMONIAL -->
    <div class="section bg_redon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Client Say!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items='1'>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('/') }}website/assets/images/user_img1.jpg" alt="user_img1" />
                                </div>
                                <div class="author_name">
                                    <h6>Lissa Castro</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('/') }}website/assets/images/user_img2.jpg" alt="user_img2" />
                                </div>
                                <div class="author_name">
                                    <h6>Alden Smith</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('/') }}website/assets/images/user_img3.jpg" alt="user_img3" />
                                </div>
                                <div class="author_name">
                                    <h6>Daisy Lana</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('/') }}website/assets/images/user_img4.jpg" alt="user_img4" />
                                </div>
                                <div class="author_name">
                                    <h6>John Becker</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION TESTIMONIAL -->

    <!-- START SECTION BLOG -->
    <div class="section pb_20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2>Latest News</h2>
                    </div>
                    <p class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('/') }}website/assets/images/el_blog_img1.jpg" alt="el_blog_img1">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">But I must explain to you how all this mistaken idea</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('/') }}website/assets/images/el_blog_img2.jpg" alt="el_blog_img2">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">On the other hand we provide denounce with righteous</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('/') }}website/assets/images/el_blog_img3.jpg" alt="el_blog_img2">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BLOG -->

    <!-- START SECTION CLIENT LOGO -->
    <div class="section small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2>Our Brands</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo1.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo2.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo3.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo4.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo5.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('/') }}website/assets/images/cl_logo6.png" alt="cl_logo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CLIENT LOGO -->
@endsection
