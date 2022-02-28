<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $image;
    private static $directory;
    private static $product;
    private static $imageName;
    private static $imageURL;

    public static function getImageUrl($request){
        // For Image
        self::$image = $request->file('product_image');
        self::$imageName = self::$image->getClientOriginalName();
        $directory = 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return  self::$directory.self::$imageName;
    }

    public static function newProduct($request){

        self::$product = new Product();
        self::$product->product_name = $request->product_name;
        self::$product->product_price = $request->product_price;
        self::$product->product_description = $request->product_description;
        self::$product->product_brand = $request->product_brand;
        self::$product->product_category = $request->product_category;
        self::$product->product_image = self::getImageUrl($request);
        self::$product->save();
    }

    public static function  updateProduct($request, $id){

        self::$product =  Product();

        if($request->file('product_image')){

        }
        else


        self::$product->product_name = $request->product_name;
        self::$product->product_price = $request->product_price;
        self::$product->product_description = $request->product_description;
        self::$product->product_brand = $request->product_brand;
        self::$product->product_category = $request->product_category;
        self::$product->product_image = self::getImageUrl($request);
        self::$product->save();


    }


}
