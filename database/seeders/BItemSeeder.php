<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('items')->insert([ [ 'name' => 'Handphone', 'price' => '2000000', 'description'=> 'Xiaomi', 'unit_id' => 1, ], ]);
    }
}
