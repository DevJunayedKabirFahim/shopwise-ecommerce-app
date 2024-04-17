<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopwiseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOfferController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\Vendor\VendorAuthController;
use App\Http\Controllers\Vendor\VendorProfileController;
use App\Http\Controllers\Vendor\VendorProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ShopwiseController::class, 'index'])->name('home');
Route::get('/product-category/{id}', [ShopwiseController::class, 'category'])->name('product-category');
Route::get('/product-sub-category/{id}', [ShopwiseController::class, 'subCategory'])->name('product-sub-category');
Route::get('/product-detail/{id}', [ShopwiseController::class, 'product'])->name('product-detail');
Route::resource('cart', CartController::class);
Route::get('/cart/remove-product/{rowId}', [CartController::class, 'deleteCart'])->name('cart.delete');
Route::post('/cart/update-cart', [CartController::class, 'updateCart'])->name('cart.update-cart');
Route::get('/clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/ajax-email-check', [CheckoutController::class, 'ajaxEmailCheck'])->name('ajax-email-check');
Route::get('/ajax-mobile-check', [CheckoutController::class, 'ajaxMobileCheck'])->name('ajax-mobile-check');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new-order');
Route::get('/complete-order', [CheckoutController::class, 'completeOrder'])->name('complete-order');
Route::get('/customer-login', [CustomerAuthController::class, 'login'])->name('customer-login');
Route::post('/login-check', [CustomerAuthController::class, 'loginCheck'])->name('login-check');
Route::get('/customer-register', [CustomerAuthController::class, 'register'])->name('customer-register');
Route::post('/new-customer', [CustomerAuthController::class, 'newCustomer'])->name('new-customer');
Route::get('/customer-logout', [CustomerAuthController::class, 'logout'])->name('customer-logout');

//Wishlist
Route::resource('wishlist',WishListController::class);
Route::get('/wishlist-ad/{id}',[WishListController::class,'wishListAdd'])->name('wishlist.ad');

Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/shipping-policy', [PagesController::class, 'shippingPolicy'])->name('shipping-policy');
Route::get('/return-policy', [PagesController::class, 'returnPolicy'])->name('return-policy');
Route::get('/terms-condition', [PagesController::class, 'termsCondition'])->name('terms-condition');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');


Route::middleware(['customer'])->group(function (){
    Route::get('/my-dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
});

Route::get('/vendor-login', [VendorAuthController::class, 'login'])->name('vendor-login');
Route::post('/vendor-login', [VendorAuthController::class, 'loginCheck'])->name('vendor-login-check');
Route::get('/vendor-register', [VendorAuthController::class, 'register'])->name('vendor-register');
Route::post('/new-vendor', [VendorAuthController::class, 'vendorRegister'])->name('new-vendor');

Route::middleware(['vendor'])->group(function (){
    Route::get('/vendor-logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');
    Route::get('/vendor-dashboard', [VendorAuthController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get('/vendor-profile/{id}', [VendorProfileController::class, 'index'])->name('vendor.profile');
    Route::post('/vendor-profile/{id}', [VendorProfileController::class, 'update'])->name('vendor.profile.update');
    Route::resource('vendor-product', VendorProductController::class);
});

/*SSL-Commerce Payment Gateway*/
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/get-subCategory-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-subCategory-by-category');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'category'      => CategoryController::class,
        'sub-category'  => SubCategoryController::class,
        'brand'         => BrandController::class,
        'unit'          => UnitController::class,
        'color'         => ColorController::class,
        'size'          => SizeController::class,
        'product'       => ProductController::class,
        'product-offer' => ProductOfferController::class,
        'order'         => OrderController::class,
        'advertisement' => AdvertisementController::class,
        'setting'       => SettingController::class
    ]);
    Route::resource('user', UserController::class)->middleware('superAdmin');
    Route::get('/order/invoice-show/{id}', [OrderController::class, 'showInvoice'])->name('order.invoice-show');
    Route::get('/order/invoice-download/{id}', [OrderController::class, 'downloadInvoice'])->name('order.invoice-download');
});
