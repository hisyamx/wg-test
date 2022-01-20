<?php

namespace Database\Seeders;

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
            'pro_code' => 'SKUSKILNP001',
            'name' => 'So Klin Pewangi',
            'price' => 15000,
            'currency' => 'IDR',
            'discount' => 10,
            'dimention' => '13 cm x 10 cm',
            'unit' => 'PCS',
        ]);
    }
}
