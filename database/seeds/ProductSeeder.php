<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'partnum' => 'ART_'.Str::random(10),
            'partnum' => 'ART_'.Str::random(10),
            'category_id'  => rand(1, 10),
            'brand_id'  => rand(1, 10),
            'price'  => rand(1000, 2500),
            'currency_id'  => rand(1, 3),
            'stock_id'  => rand(1, 3),
            'shortdescr' => 'shortdescr_'.Str::random(100),
            'fulldescr' => 'fulldescr_'.Str::random(1000),
            'isnew' => (bool)random_int(0, 1),
            'ishot' => (bool)random_int(0, 1),
            'ordernum'  => rand(1, 10),
            'available' => (bool)random_int(0, 1),
        ]);
    }
}
