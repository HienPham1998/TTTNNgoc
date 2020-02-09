<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_detail')->insert([
            "screen" => 'Super AMOLED, 6.7", Full HD+',
            "product_id" =>"1",
            "operation_system" => "Android 10",
            "rear_camera" => "Chính 12 MP & Phụ 12 MP, 12 MP",
            "front_camera" => "32 MP",
            "cpu" => "Exynos 9810 8 nhân",
            "ram" => "8 GB",
            "rom" => "128 GB",
            "sim_card" => "Hỗ trợ 4G",
            "pin_capacity" =>"4500 mAh, có sạc nhanh",
        ]);
        DB::table('product_detail')->insert([
            "screen" => 'Super AMOLED, 6.7", Full HD+',
            "product_id" =>"1",
            "operation_system" => "Android 10",
            "rear_camera" => "Chính 12 MP & Phụ 12 MP, 12 MP",
            "front_camera" => "32 MP",
            "cpu" => "Exynos 9810 8 nhân",
            "ram" => "8 GB",
            "rom" => "128 GB",
            "sim_card" => "Hỗ trợ 4G",
            "pin_capacity" =>"4500 mAh, có sạc nhanh",
        ]);
        DB::table('product_detail')->insert([
            "screen" => 'Super AMOLED, 6.7", Full HD+',
            "product_id" =>"1",
            "operation_system" => "Android 10",
            "rear_camera" => "Chính 12 MP & Phụ 12 MP, 12 MP",
            "front_camera" => "32 MP",
            "cpu" => "Exynos 9810 8 nhân",
            "ram" => "8 GB",
            "rom" => "128 GB",
            "sim_card" => "Hỗ trợ 4G",
            "pin_capacity" =>"4500 mAh, có sạc nhanh",
        ]);
        DB::table('product_detail')->insert([
            "screen" => 'Super AMOLED, 6.7", Full HD+',
            "product_id" =>"1",
            "operation_system" => "Android 10",
            "rear_camera" => "Chính 12 MP & Phụ 12 MP, 12 MP",
            "front_camera" => "32 MP",
            "cpu" => "Exynos 9810 8 nhân",
            "ram" => "8 GB",
            "rom" => "128 GB",
            "sim_card" => "Hỗ trợ 4G",
            "pin_capacity" =>"4500 mAh, có sạc nhanh",
        ]);
    }
}
