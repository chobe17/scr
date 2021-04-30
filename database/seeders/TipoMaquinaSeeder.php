<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_maquinas')->insert([
            'nombre_tipo' => 'CCM',
        ]);
        DB::table('tipo_maquinas')->insert([
            'nombre_tipo' => 'SFM',
        ]);
        DB::table('tipo_maquinas')->insert([
            'nombre_tipo' => 'PMV',
        ]);
        DB::table('tipo_maquinas')->insert([
            'nombre_tipo' => 'KASE',
        ]);
    }
}
