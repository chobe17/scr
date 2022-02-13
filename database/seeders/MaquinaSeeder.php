<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maquinas')->insert([
            'nombre' => 'CCM AG',
            'tipo_maquina' => 'CCM',
            'linea' => 'AG',
            'capacidad' => '600',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM AG',
            'tipo_maquina' => 'SFM',
            'linea' => 'AG',
            'capacidad' => '600',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'CCM AH',
            'tipo_maquina' => 'CCM',
            'linea' => 'AH',
            'capacidad' => '600',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM AH',
            'tipo_maquina' => 'SFM',
            'linea' => 'AH',
            'capacidad' => '600',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'CCM AJ',
            'tipo_maquina' => 'CCM',
            'linea' => 'AJ',
            'capacidad' => '1200',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM AJ',
            'tipo_maquina' => 'SFM',
            'linea' => 'AJ',
            'capacidad' => '1200',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'CCM AK',
            'tipo_maquina' => 'CCM',
            'linea' => 'AK',
            'capacidad' => '1200',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM AK',
            'tipo_maquina' => 'SFM',
            'linea' => 'AK',
            'capacidad' => '1200',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'CCM H',
            'tipo_maquina' => 'CCM',
            'linea' => 'H',
            'capacidad' => '1100',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM H',
            'tipo_maquina' => 'SFM',
            'linea' => 'H',
            'capacidad' => '1100',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'PMV H',
            'tipo_maquina' => 'PMV',
            'linea' => 'H',
            'capacidad' => '1100',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM E',
            'tipo_maquina' => 'E',
            'linea' => 'E',
            'capacidad' => '1100',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'CCM L',
            'tipo_maquina' => 'CCM',
            'linea' => 'L',
            'capacidad' => '600',
        ]);
        DB::table('maquinas')->insert([
            'nombre' => 'SFM L',
            'tipo_maquina' => 'SFM',
            'linea' => 'L',
            'capacidad' => '600',
        ]);
    }
}
