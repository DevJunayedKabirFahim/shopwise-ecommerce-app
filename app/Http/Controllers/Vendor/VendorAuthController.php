<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Session;

class VendorAuthController extends Controller
{
    private $vendor;

    public function login()
    {
        return view('website.vendor.login');
    }
    public function register()
    {
        return view('website.vendor.register');
    }

    public function loginCheck(Request $request)
    {
        $this->vendor = Vendor::where('email',$request->user_name)->orWhere('mobile',$request->user_name)->first();

        if ($this->vendor){
            if (password_verify( $request->password , $this->vendor->password)){
                Session::put('vendor_id', $this->vendor->id);
                Session::put('vendor_name', $this->vendor->name);

                return redirect('/vendor-dashboard');
            }
            else{
                return back()->with('message','Your password is not valid ');
            }
        }
        else{

            return back()->with('message','Your email or Mobile number is not valid ');
        }
    }

    public function vendorRegister(Request $request)
    {
        $this->vendor = Vendor::newVendor($request);

        Session::put('vendor_id', $this->vendor->id);
        Session::put('vendor_name', $this->vendor->name);

        return redirect('/vendor-dashboard')->with('message', 'New vendor account created successfully. You have redirected to dashboard.');
    }

    public function dashboard()
    {
        return view('admin.vendor.dashboard');
        /*return view('website.vendor.dashboard');*/
    }


    public function logout()
    {
        Session::forget('vendor_id');
        Session::forget('vendor_name');

        return redirect('/');
    }
}
