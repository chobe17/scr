<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lineas')->insert([
            'nombre' => 'AG',
            'descripcion' => 'CO PRENSAHIDRAULICAGIRATORIA SACMI',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'AH',
            'descripcion' => 'CO PRENSAHIDRAULICAGIRATORIA SACMI',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'AJ',
            'descripcion' => 'CO PRENSAHIDRAULICAGIRATORIA SACMI 48SC-10317409 URA CSD 17',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'AK',
            'descripcion' => 'CO PRENSAHIDRAULICAGIRATORIA SACMI 48SC-10317410 URA CSD 17',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'E',
            'descripcion' => 'CO COMPRESORA SACMI Modelo 002',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'H',
            'descripcion' => 'CO COMPRESORA SACMI Modelo 002',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'L',
            'descripcion' => 'CO COMPRESORA SACMI MODELO 32M',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'KASE 1',
            'descripcion' => 'KASE ROTATIVA',
        ]);

        DB::table('lineas')->insert([
            'nombre' => 'KASE 2',
            'descripcion' => 'KASE ROTATIVA',
        ]);

    }
}
