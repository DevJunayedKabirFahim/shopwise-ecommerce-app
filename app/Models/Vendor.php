<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    private static $vendor, $image, $imageName, $imageUrl, $directory, $extension;
    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName    = time().'.'.self::$extension;
        self::$directory    = "upload/vendor-user-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newVendor($request)
    {
        self::$vendor = new Vendor();
        self::$vendor->name     = $request->name;
        self::$vendor->email    = $request->email;
        self::$vendor->mobile   = $request->mobile;
        if ($request->password){
            self::$vendor->password = bcrypt($request->password);
        }
        else{
            self::$vendor->password = bcrypt($request->mobile);
        }

        self::$vendor->save();
        return self::$vendor;
    }

    public static function updateVendor($request, $id)
    {
        self::$vendor = Vendor::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$vendor->image))
            {
                unlink(self::$vendor->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$vendor->image;
        }

        self::$vendor->name     = $request->name;
        self::$vendor->email    = $request->email;
        self::$vendor->mobile   = $request->mobile;
        self::$vendor->address  = $request->address;
        self::$vendor->image    = self::$imageUrl;
        self::$vendor->date_of_birth   = $request->date_of_birth;
        self::$vendor->blood_group   = $request->blood_group;
        self::$vendor->nid   = $request->nid;
        self::$vendor->district   = $request->district;


        self::$vendor->save();

    }
}
