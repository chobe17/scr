<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartamentoSeeder::class);
        $this->call(LineaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(TipoMaquinaSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(MotivosDescartesSeeder::class);
    }
}
