<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mynor Cáceres',
            'codigo' => '209',
            'area' => '5',
            'password' => Hash::make('contraseña'),
        ]);

        DB::table('users')->insert([
            'name' => 'Oscar Cetino',
            'codigo' => '227',
            'area' => '5',
            'password' => Hash::make('contraseña'),
        ]);

        DB::table('users')->insert([
            'name' => 'Brian Archila',
            'codigo' => '246',
            'area' => '5',
            'password' => Hash::make('contraseña'),
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Estrada',
            'codigo' => '69',
            'area' => '5',
            'password' => Hash::make('contraseña'),
        ]);
        DB::table('users')->insert([
            'name' => 'Emmanuel Rodríguez',
            'codigo' => '167',
            'area' => '5',
            'password' => Hash::make('contraseña'),
        ]);
        DB::table('users')->insert([
            'name' => 'Virginia Aguilar',
            'codigo' => '247',
            'area' => '2',
            'password' => Hash::make('contraseña'),
        ]);
    }
}
