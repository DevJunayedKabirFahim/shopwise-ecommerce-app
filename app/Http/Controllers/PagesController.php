<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('website.pages.about');
    }
    public function shippingPolicy()
    {
        return view('website.pages.shipping-policy');
    }
    public function returnPolicy()
    {
        return view('website.pages.return-policy');
    }
    public function termsCondition()
    {
        return view('website.pages.terms-condition');
    }
    public function contact()
    {
        return view('website.pages.contact', ['setting' => Setting::latest()->first()]);
    }
}
