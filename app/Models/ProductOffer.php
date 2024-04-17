<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOffer extends Model
{
    use HasFactory;
    private static $productOffer, $image, $imageName, $extension, $directory, $imageUrl;
    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/product-banner-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProductOffer($request)
    {
        self::$productOffer = new ProductOffer();
        self::$imageUrl = self::getImageUrl($request);
        self::saveBasicInfo($request, self::$productOffer, self::$imageUrl);

    }

    public static function updateProductOffer($request, $productOffer)
    {
        if ($request->file('image'))
        {
            if (file_exists($productOffer->image))
            {
                unlink($productOffer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $productOffer->image;
        }

        self::saveBasicInfo($request, $productOffer, self::$imageUrl);
    }

    public static function deleteProductOffer($productOffer)
    {
        if (file_exists($productOffer->image))
        {
            unlink($productOffer->image);
        }

        $productOffer->delete();
    }
    private static function saveBasicInfo($request, $productOffer, $imageUrl)
    {
        $productOffer->product_id     = $request->product_id;
        $productOffer->title_one      = $request->title_one;
        $productOffer->title_two      = $request->title_two;
        $productOffer->description    = $request->description;
        $productOffer->discount_amount= $request->discount_amount;
        $productOffer->image          = $imageUrl;
        $productOffer->status         = $request->status;
        $productOffer->save();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
