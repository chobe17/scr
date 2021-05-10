<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'encargado' => '1. Miguel Revolorio',
        ]);
        DB::table('grupos')->insert([
            'encargado' => '2. Melvin Monzón',
        ]);
        DB::table('grupos')->insert([
            'encargado' => '3. Victor Ríos',
        ]);
        DB::table('grupos')->insert([
            'encargado' => '4. Alexander Siquinajay',
        ]);
    }
}
