<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category, $image, $imageName, $directory, $imageUrl;
    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/category-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newCategory($request)
    {
        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = "upload/default-images/no-image.png";
        }

        self::$category                 = new Category();
        self::saveBasicInfo($request, self::$category, self::$imageUrl);

    }

    public static function updateCategory($request, $category)
    {
        if ($request->file('image'))
        {
            if (file_exists($category->image))
            {
                if ($category->image != "upload/default-images/no-image.png")
                {
                    unlink($category->image);
                }
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $category->image;
        }
        self::saveBasicInfo($request, $category, self::$imageUrl);
    }

    public static function deleteCategory($category)
    {
        if (file_exists($category->image))
        {
            if ($category->image != "upload/default-images/no-image.png")
            {
                unlink($category->image);
            }
        }
        $category->delete();
    }

    private static function saveBasicInfo($request, $category, $imageUrl)
    {
        $category->name           = $request->name;
        $category->description    = $request->description;
        $category->image          = $imageUrl;
        $category->status         = $request->status;
        $category->save();
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
