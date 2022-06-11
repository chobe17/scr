<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MermaDiariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-05',
            'produccion' => '8324536',
            'descartes' => '35546',
            'merma' => '4.27',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-06',
            'produccion' => '8648521',
            'descartes' => '44280',
            'merma' => '5.12',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-07',
            'produccion' => '8324536',
            'descartes' => '35546',
            'merma' => '4.27',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-08',
            'produccion' => '7985461',
            'descartes' => '32341',
            'merma' => '4.05',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-09',
            'produccion' => '8523461',
            'descartes' => '30258',
            'merma' => '3.55',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-10',
            'produccion' => '9056124',
            'descartes' => '20739',
            'merma' => '2.29',
        ]);
        DB::table('mermas_diarias')->insert([
            'created_at' => '2022-06-11',
            'produccion' => '7645395',
            'descartes' => '36927',
            'merma' => '4.83',
        ]);

    }
}
