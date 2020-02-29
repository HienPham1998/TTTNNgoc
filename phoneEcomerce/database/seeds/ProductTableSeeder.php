<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "Samsung Galaxy Note 10 Lite",
            "brand_id" => "1",
            "provider_id" => "1",
            "promotion_price" => "11590000",
            "price" => "11990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/samsung-galaxy-a50-black.png",
        ]);
        DB::table('products')->insert([
            "name" => "iPhone 11 Pro Max 512GB",
            "brand_id" => "3",
            "provider_id" => "1",
            "promotion_price" => "41990000",
            "price" => "43990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/iphone-11-pro-max.png",
        ]);
        DB::table('products')->insert([
            "name" => "Xiaomi Mi Note 10 Pro",
            "brand_id" => "4",
            "provider_id" => "1",
            "promotion_price" => "13990000",
            "price" => "13990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/xiaomi-note10-pro.png",
        ]);
        DB::table('products')->insert([
            "name" => "OPPO Reno2 F",
            "brand_id" => "2",
            "provider_id" => "1",
            "promotion_price" => "7390000",
            "price" => "7990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/oppo-reno2-f.png",
        ]);
        DB::table('products')->insert([
            "name" => "OPPO Reno2 F",
            "brand_id" => "2",
            "provider_id" => "1",
            "promotion_price" => "7690000",
            "price" => "7990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/oppo-reno2-f.png",
        ]);
        DB::table('products')->insert([
            "name" => "OPPO Reno2 F",
            "brand_id" => "2",
            "provider_id" => "1",
            "promotion_price" => "7790000",
            "price" => "7990000",
            "quantity" => "100",
            "image" =>"../client/assets/images/product/oppo-reno2-f.png",
        ]);
    }
}
