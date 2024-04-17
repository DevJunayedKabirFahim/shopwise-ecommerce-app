<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Session;

class VendorProfileController extends Controller
{
    private $vendor;
    public function index($id)
    {
        $this->vendor = Vendor::find($id);
        return view('admin.vendor.profile', ['vendor' => $this->vendor]);
    }

    public function update(Request $request, string $id)
    {
//        return $request;
        Vendor::updateVendor($request, $id);
        return back()->with('message', 'Vendor profile info updated successfully.');
    }
}
