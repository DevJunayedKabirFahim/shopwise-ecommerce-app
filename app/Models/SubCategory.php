<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory, $image, $imageName, $directory, $imageUrl;
    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/sub-category-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSubCategory($request)
    {
        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = "upload/default-images/no-image.png";
        }
        self::$subCategory = new SubCategory();
        self::saveBasicInfo(self::$subCategory, $request, self::$imageUrl);
    }

    public static function updateSubCategory($request, $subCategory)
    {
        if ($request->file('image'))
        {
            if (file_exists($subCategory->image))
            {
                if ($subCategory->image != "upload/default-images/no-image.png")
                {
                    unlink($subCategory->image);
                }
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $subCategory->image;
        }

        self::saveBasicInfo($subCategory, $request, self::$imageUrl);
    }

    public static function deleteSubCategory($subCategory)
    {
        if (file_exists($subCategory->image))
        {
            if ($subCategory->image != "upload/default-images/no-image.png")
            {
                unlink($subCategory->image);
            }
        }
        $subCategory->delete();
    }

    private static function saveBasicInfo($subCategory, $request, $imageUrl)
    {
        $subCategory->category_id    = $request->category_id;
        $subCategory->name           = $request->name;
        $subCategory->description    = $request->description;
        $subCategory->image          = $imageUrl;
        $subCategory->status         = $request->status;
        $subCategory->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
