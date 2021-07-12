<?php

namespace Database\Seeders;

use App\Models\Configuraciones;
use Illuminate\Database\Seeder;

class ConfiguracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuraciones::factory(30)->create();
    }
}
