<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'doc_code' => 'TRX',
            'number' => '001',
            'pro_code' => 'SKUSKILNP001',
            'price' => '15000',
            'quantity' => '5',
            'unit' => 'PCS',
            'subtotal' => '67500',
            'currency' => 'IDR',
        ]);
    }
}
