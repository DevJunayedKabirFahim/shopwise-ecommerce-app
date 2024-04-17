<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer, $orders;
    public function login()
    {
        return view('website.customer.login');
    }
    public function register()
    {
        return view('website.customer.register');
    }
    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email', $request->user_name)->orWhere('mobile', $request->user_name)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);

                return redirect(route('customer.dashboard'));
            }
            else
            {
                return back()->with('message', '😰 Your password not valid. Try again letter. !!!');
            }
        }
        else
        {
            return back()->with('message', '😓 Your email or mobile not valid. !!!');
        }
    }

    public function dashboard()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->get();
        return view('website.customer.dashboard', ['orders' => $this->orders]);
    }
    public function newCustomer(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'mobile' => 'required|unique:customers,mobile',
            'password' => 'required',
        ],[
            'name.required' => 'Please enter your name. *',
            'email.required' => 'Please enter your email. *',
            'mobile.required' => 'Please enter your mobile number. *',
            'password.required' => 'Please enter a password. *',
            'email.unique' => 'This email address already has taken. *',
            'mobile.unique' => 'This mobile number already has taken. *',
        ]);

        $this->customer = Customer::newCustomer($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return redirect(route('customer.dashboard'));
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }
}
