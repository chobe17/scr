<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenesDeProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordenes_produccion')->insert([
            'numero_orden' => '2845',
            'codigo_producto' => 'M28URC22577',
            'descripcion_producto' => 'AZUL',
        ]);
        DB::table('ordenes_produccion')->insert([
            'numero_orden' => '3307',
            'codigo_producto' => 'M28URCCG277',
            'descripcion_producto' => 'ROJO Y 1/T BLANCA "443 COCA-COLA ROJA FEMSA NR',
        ]);
        DB::table('ordenes_produccion')->insert([
            'numero_orden' => '3309',
            'codigo_producto' => 'M28RMA00000',
            'descripcion_producto' => 'TRASLUCIDO',
        ]);
        DB::table('ordenes_produccion')->insert([
            'numero_orden' => '3321',
            'codigo_producto' => 'M28URA12400',
            'descripcion_producto' => 'ROJO',
        ]);
        DB::table('ordenes_produccion')->insert([
            'numero_orden' => '3324',
            'codigo_producto' => 'M28URAHE677',
            'descripcion_producto' => 'ROJO Y 1/T BLANCA "B52 COCA-COLA EINSTEIN LINDLEY NR',
        ]);
    }
}
