<?php

namespace Database\Seeders;

use App\Models\Tipo_Problema;
use Illuminate\Database\Seeder;

class TipoProblemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Problema::create([
            'nombre' => 'Sin asignar tipo',
        ]);

        Tipo_Problema::create([
            'nombre' => 'Incidente',
        ]);

        Tipo_Problema::create([
            'nombre' => 'Problema',
        ]);

        Tipo_Problema::create([
            'nombre' => 'Pregunta',
        ]);

        Tipo_Problema::create([
            'nombre' => 'Requerimineto de Servicio',
        ]);
    }
}
