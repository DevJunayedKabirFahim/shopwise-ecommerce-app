<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubImage extends Model
{
    use HasFactory;
    private static $productSubImage, $productSubImages, $imageName, $extension, $directory, $imageUrl;
    private static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName    = rand(0, 50000000).'.'.self::$extension;
        self::$directory    = "upload/product-sub-images/";
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProductSubImage($images, $id)
    {
        foreach ($images as $image) {
            self::$productSubImage = new ProductSubImage();
            self::$productSubImage->image       = self::getImageUrl($image);
            self::$productSubImage->product_id  = $id;
            self::$productSubImage->save();
        }
    }

    public static function updateProductSubImage($images, $id)
    {
        self::$productSubImages = ProductSubImage::where('product_id', $id)->get();
        foreach (self::$productSubImages as $productSubImage) {
            if (file_exists($productSubImage->image))
            {
                if ($productSubImage->image != "upload/default-images/no-image.png")
                {
                    unlink($productSubImage->image);
                }
            }
            $productSubImage->delete();
        }
        ProductSubImage::newProductSubImage($images, $id);
    }

    public static function deleteProductSubImage($id)
    {
        self::$productSubImages = ProductSubImage::where('product_id', $id)->get();
        foreach (self::$productSubImages as $productSubImage) {
            if (file_exists($productSubImage->image))
            {
                if ($productSubImage->image != "upload/default-images/no-image.png")
                {
                    unlink($productSubImage->image);
                }
            }
            $productSubImage->delete();
        }
    }
}
