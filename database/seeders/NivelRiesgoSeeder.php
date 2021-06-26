<?php

namespace Database\Seeders;

use App\Models\Nivel_Riesgo;
use Illuminate\Database\Seeder;

class NivelRiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel_Riesgo::create([
            'Nombre' => 'Muy Bajo',
        ]);

        Nivel_Riesgo::create([
            'Nombre' => 'Bajo',
        ]);
        
        Nivel_Riesgo::create([
            'Nombre' => 'Moderado',
        ]);

        Nivel_Riesgo::create([
            'Nombre' => 'Alto',
        ]);

        Nivel_Riesgo::create([
            'Nombre' => 'Muy Alto',
        ]);
    }
}
