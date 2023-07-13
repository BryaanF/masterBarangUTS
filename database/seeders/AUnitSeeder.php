<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('units')->insert([ [ 'name' => 'PCS', ], [ 'name' => 'DUS', ], [ 'name' => 'PAK', ], [ 'name' => 'BAL', ], ]);
    }
}
