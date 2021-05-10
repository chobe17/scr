<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivosDescartesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Ajustes de CVS',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Ajustes de Kase',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Aleta Fracturada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Autoliner Ovalado',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Descentrada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Emplastada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Faltante',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Faltante de Impresión',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Faltante en Aleta',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Flameada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Golpe',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Golpe en Cintillo',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Golpe en Estriado',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Hilos de Proceso',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Hilos y Rebaba',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Impresión Incompleta',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Impresión Porosa',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Ok',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Paros y Arranques',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Porosa',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Puntos Negros',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Rebaba',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Rebaba de Aleta',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Sin Cintillo y Machucada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Sombrero',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Sucia',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Tapa Con Grasa',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Tapa Movida',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Tapa Ovalada',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Variacion de Tinta',
        ]);
        DB::table('motivos_descartes')->insert([
            'motivo' => 'Variación Tono De Concha',
        ]);
    }
}
