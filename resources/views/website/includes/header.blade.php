<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->
@if(\Request::route()->getname() == "home")
<!-- Home Popup Section -->
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row g-0">
                    <div class="col-sm-7">
                        <div class="popup_content  text-start">
                            <div class="popup-text">
                                <div class="heading_s1">
                                    <h3>Subscribe Newsletter and Get 25% Discount!</h3>
                                </div>
                                <p>Subscribe to the newsletter to receive updates about new products.</p>
                            </div>
                            <form method="post">
                                <div class="form-group mb-3">
                                    <input name="email" required type="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="btn btn-fill-out btn-block text-uppercase" title="Subscribe" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="background_bg h-100" data-img-src="{{ asset('/') }}website/assets/images/popup_img3.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Screen Load Popup Section -->
@endif
<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="header_topbar_info">
                        <div class="header_offer">
                            <span>{{ $setting->company_name }}</span>
                        </div>
                        <div class="download_wrap">
                            <span class="me-3">{{ $setting->slogan }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="lng_dropdown">
                            <select name="countries" class="custome_select">
                                <option value='en'  data-title="English">English</option>
                                <option value='fn'  data-title="France">France</option>
                                <option value='us'  data-title="United States">United States</option>
                            </select>
                        </div>
                        <div class="ms-3">
                            <span class="me-3">|</span><span id="watch"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
        <div class="container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_light" src="{{ asset($setting->logo_jpg) }}" alt="logo">
                    <img class="logo_dark" src="{{ asset($setting->logo_png) }}">
                </a>
                <div class="product_search_form radius_input search_form_btn">
                    <form>
                        <div class="input-group">
                            <input class="form-control" id="searchText" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn3">Search</button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center header_list">
                    @if(Session::get('customer_id'))
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-user fs-5"></i></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li><i class="linearicons-user"></i>{{ Session::get('customer_name') }}</li>
                                    <li><a href="{{ route('customer.dashboard') }}"><i class="linearicons-folder-user"></i>Dashboard</a></li>
                                    <li><a href="{{ route('customer-logout') }}"><i class="linearicons-lock"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li><a href="{{ route('customer-login') }}"><i class="linearicons-user fs-5"></i></a></li>
                    @endif
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">{{ count(Cart::content()) }}</span><span class="amount"><span class="currency_symbol">$</span>{{ round(Cart::total()) - round(Cart::tax()) }}</span></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @php($sum = 0)
                                @foreach(Cart::content() as $item)
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="{{ route('product-detail', ['id' => $item->id]) }}"><img src="{{ asset($item->options->image) }}" alt="cart_thumb1">{{ $item->name }}</a>
                                    <span class="cart_quantity"> {{$item->qty}} x <span class="cart_amount"> <span class="price_symbole">$</span></span>{{$item->subtotal}}</span>
                                </li>
                                    @php($sum = $sum + $item->subtotal)
                                @endforeach
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>{{ round($sum) }}</p>
                                <p class="cart_buttons"><a href="{{ route('cart.index') }}" class="btn btn-fill-line view-cart">View Cart</a><a href="{{ count(Cart::content()) > 0 ? route('checkout') : route('cart.index') }}" class="btn btn-fill-out checkout {{ count(Cart::content()) <= 0 ? 'disabled' : '' }}">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                        <div id="navCatContent" class="navbar nav collapse">
                            <ul>
                                @foreach($categories as $category)
                                <li class="dropdown">
                                    <a class="dropdown-item nav-link {{ count($category->subCategory) > 0 ? 'dropdown-toggler' : '' }} nav_item" href="{{ route('product-category', ['id' => $category->id]) }}"><span>{{ $category->name }}</span></a>
                                    @if(count($category->subCategory) > 0)
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            @foreach($category->subCategory as $subCategory)
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header"><a href="{{ route('product-sub-category', ['id' => $subCategory->id]) }}">{{ $subCategory->name }}</a></li>
                                                        @foreach($subCategory->product as $subCategoryProduct)
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{ route('product-detail', ['id' => $subCategoryProduct->id]) }}">{{ $subCategoryProduct->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li class="dropdown">
                                    <a  class="nav-link {{ \Request::route()->getname() == "home" ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a class="nav-link nav_item {{ \Request::route()->getname() == "about" ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                                <li><a class="nav-link nav_item {{ \Request::route()->getname() == "shipping-policy" ? 'active' : '' }}" href="{{ route('shipping-policy') }}">Shipping Policy</a></li>
                                <li><a class="nav-link nav_item {{ \Request::route()->getname() == "terms-condition" ? 'active' : '' }}" href="{{ route('terms-condition') }}">Terms and Condition</a></li>
                                <li><a class="nav-link nav_item {{ \Request::route()->getname() == "contact" ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>{{ $setting->contact_phone }}</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->
