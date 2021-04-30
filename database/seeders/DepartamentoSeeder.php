<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Almacén',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Control de calidad',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Mantenimiento',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Producción',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Sistemas de visión',
        ]);
    }
}
