<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MermaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mermas')->insert([
            'created_at' => '2022-06-02 07:34:27',
            'linea' => 'AG',
            'maquina' => 'CCM AG',
            'tipo_maquina' => 'CCM',
            'tintas' => 'N/A',
            'codigo_analista' => '167',
            'nombre_analista' => 'Emmanuel Rodríguez',
            'turno' => '1',
            'grupo' => '3',
            'produccion' => '467213',
            'merma' => '0.28',
            'rechazados' => '131',
            'motivo_descarte' => 'Ok',
            'comentarios' => 'Ok',
            'codigo_operador' => '16',
            'orden_produccion' => '3464',
            'codigo_producto' => 'M33HFA29400',
            'descripcion_producto' => 'NARANJA',
            'confirmado' => '0', 
        ]);
        DB::table('mermas')->insert([
            'created_at' => '2022-06-02 07:34:27',
            'linea' => 'AG',
            'maquina' => 'SFM AG',
            'tipo_maquina' => 'SFM',
            'tintas' => 'N/A',
            'codigo_analista' => '167',
            'nombre_analista' => 'Emmanuel Rodríguez',
            'turno' => '1',
            'grupo' => '3',
            'produccion' => '466597',
            'merma' => '0.12',
            'rechazados' => '56',
            'motivo_descarte' => 'Ok',
            'comentarios' => 'Ok',
            'codigo_operador' => '16',
            'orden_produccion' => '3464',
            'codigo_producto' => 'M33HFA29400',
            'descripcion_producto' => 'NARANJA',
            'confirmado' => '0', 
        ]);
    DB::table('mermas')->insert([
            'created_at' => '2022-06-02 21:38:27',
            'linea' => 'H',
            'maquina' => 'CCM H',
            'tipo_maquina' => 'CCM',
            'tintas' => 'N/A',
            'codigo_analista' => '227',
            'nombre_analista' => 'Oscar Cetino',
            'turno' => '2',
            'grupo' => '2',
            'produccion' => '549786',
            'merma' => '0.08',
            'rechazados' => '44',
            'motivo_descarte' => 'Ok',
            'comentarios' => 'Ok',
            'codigo_operador' => '210',
            'orden_produccion' => '3224',
            'codigo_producto' => 'M28URC22577',
            'descripcion_producto' => 'AZUL',
            'confirmado' => '0', 
        ]);
    DB::table('mermas')->insert([
            'created_at' => '2022-06-02 21:38:27',
            'linea' => 'H',
            'maquina' => 'SFM H',
            'tipo_maquina' => 'SFM',
            'tintas' => 'N/A',
            'codigo_analista' => '227',
            'nombre_analista' => 'Oscar Cetino',
            'turno' => '2',
            'grupo' => '2',
            'produccion' => '5484675',
            'merma' => '0.29',
            'rechazados' => '159',
            'motivo_descarte' => 'Ok',
            'comentarios' => 'Ok',
            'codigo_operador' => '210',
            'orden_produccion' => '3224',
            'codigo_producto' => 'M28URC22577',
            'descripcion_producto' => 'AZUL',
            'confirmado' => '0', 
        ]);
    }
}

