<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TransactionHeader extends Seeder
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
            'user' => 'Khusnul Hisyam',
            'total' => '67500',
            'date' => '20-05-2000',
        ]);
    }
}
