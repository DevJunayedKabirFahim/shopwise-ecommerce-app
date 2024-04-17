@extends('website.master')
@section('title', 'Checkout')
@section('breadcrumb')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
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
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('new-order') }}" method="post">
                        @csrf
                    <div class="heading_s1">
                        <h4>Billing Details</h4>
                    </div>
                        <div class="form-group mb-3">
                            @if(isset($customer->name))
                                <input type="text" required="" readonly value="{{ $customer->name }}" class="form-control" name="name" placeholder="Your full name *"/>
                            @else
                                <input type="text" required="" class="form-control" name="name" placeholder="Your full name *"/>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            @if(isset($customer->email))
                                <input class="form-control" required="" readonly value="{{ $customer->email }}" type="email" name="email" placeholder="Email address *"/>
                            @else
                                <input class="form-control" required="" type="email" id="checkoutCustomerEmail" name="email" placeholder="Email address *"/>
                                <span class="text-danger" id="emailRes"></span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            @if(isset($customer->mobile))
                                <input class="form-control" required="" readonly value="{{ $customer->mobile }}" type="number" name="mobile" placeholder="Phone *"/>
                            @else
                                <input class="form-control" id="checkoutCustomerMobile" required type="number" name="mobile" placeholder="Phone *"/>
                                <span class="text-danger" id="mobileRes"></span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <textarea rows="5" class="form-control" required name="delivery_address" placeholder="Delivery Address *"></textarea>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="heading_s1">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sum = 0)
                                @foreach(Cart::content() as $item)
                                <tr>
                                    <td>{{$item->name}} <span class="product-qty">x {{$item->qty}}</span></td>
                                    <td>${{ $item->subtotal }}</td>
                                </tr>
                                    @php($sum = $sum + $item->subtotal)
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">${{$sum}}</td>
                                </tr>
                                <tr>
                                    <th>Tax Total</th>
                                    <td class="product-subtotal">${{ $tax = round(Cart::tax()) }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>All Over BD ${{ count(Cart::content()) > 0 ? $shippingCost = 100 : $shippingCost = 0}}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">${{ $orderTotal = round($sum + $tax + $shippingCost) }}</td>
                                </tr>
                                </tfoot>
                                <input type="hidden" readonly name="order_total" value="{{ $orderTotal }}">
                                <input type="hidden" readonly name="tax_total" value="{{ $tax }}">
                                <input type="hidden" readonly name="shipping_total" value="{{ $shippingCost }}">
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="heading_s1">
                                <h5>Payment Method</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" checked="" type="radio" name="payment_method" id="exampleRadios4" value="Online">
                                    <label class="form-check-label" for="exampleRadios4">Online Mobile Banking (Recommended)</label>
                                    <p data-method="option4" class="payment-text">Please send your payment with our trusted online mobile banking. Payment through Bkash, Nagad, Rocket are currently accepted</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_method" id="exampleRadios3" value="Cash">
                                    <label class="form-check-label" for="exampleRadios3">Cash On Delivery</label>
                                    <p data-method="option3" class="payment-text">You can pay after you receive your ordered product. Pay to the courier boy. Extra charges may apply for cash on delivery. *</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-fill-out btn-block {{ count(Cart::content()) == 0 ? 'disabled' : ''}}">Place Order</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
