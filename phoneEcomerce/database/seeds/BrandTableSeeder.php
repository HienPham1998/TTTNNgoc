<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('brands')->insert([
            "name" => "SamSung"
        ]);
        DB::table('brands')->insert([
            "name" => "Oppo"
        ]);
        DB::table('brands')->insert([
            "name" => "Iphone"
        ]);
        DB::table('brands')->insert([
            "name" => "Xiaomi"
        ]);
        DB::table('brands')->insert([
            "name" => "Nokia"
        ]);
    }
}
