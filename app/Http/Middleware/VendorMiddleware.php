<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::get('vendor_id'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/vendor-login')->with('message', 'Please Login first. If you are not registered than register as a new vendor first.');
        }
    }
}
