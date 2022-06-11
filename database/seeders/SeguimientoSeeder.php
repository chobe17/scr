<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'CCM AG',
            'merma' => '0.24',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'SFM AG',
            'merma' => '0.14',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'CCM AH',
            'merma' => '0.85',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'SFM AH',
            'merma' => '0.45',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'CCM H',
            'merma' => '0.01',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 13:51:31',
            'turno' => '1',
            'maquina' => 'SFM H',
            'merma' => '0.27',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'TVC E',
            'merma' => '0.33',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'SFM AJ',
            'merma' => '0.46',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'CCM AK',
            'merma' => '3.24',
            'motivo_descarte' => 'Variación de tono',
            'Comentarios' => 'Rebaba',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'SFM AK',
            'merma' => '1.11',
            'motivo_descarte' => 'Variación de tono',
            'Comentarios' => 'Ovalada',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'CCM L',
            'merma' => '16.01',
            'motivo_descarte' => 'Faltante de aleta',
            'Comentarios' => 'Rebaba de aleta',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-03 19:21:31',
            'turno' => '2',
            'maquina' => 'TVC L',
            'merma' => '2.47',
            'motivo_descarte' => 'Rebaba de aleta',
            'Comentarios' => 'Ovalada',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-05 19:21:31',
            'turno' => '1',
            'maquina' => 'CCM AJ',
            'merma' => '0.27',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-06 19:21:31',
            'turno' => '2',
            'maquina' => 'CCM AJ',
            'merma' => '0.56',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-07 19:21:31',
            'turno' => '1',
            'maquina' => 'CCM AJ',
            'merma' => '0.98',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-08 19:21:31',
            'turno' => '2',
            'maquina' => 'CCM AJ',
            'merma' => '0.42',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-09 19:21:31',
            'turno' => '1',
            'maquina' => 'CCM AJ',
            'merma' => '0.07',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-10 19:21:31',
            'turno' => '2',
            'maquina' => 'CCM AJ',
            'merma' => '0.17',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
        DB::table('seguimientos')->insert([
            'created_at' => '2022-06-11 19:21:31',
            'turno' => '1',
            'maquina' => 'CCM AJ',
            'merma' => '0.25',
            'motivo_descarte' => 'Ok',
            'Comentarios' => 'Ok',
        ]);
    }
}
