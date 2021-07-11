<?php

namespace Database\Seeders;

use App\Models\Tipo_Incidente;
use Illuminate\Database\Seeder;

class TipoIncidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Incidente::create([
            'Nombre' => 'Hardware',
        ]);

        Tipo_Incidente::create([
            'Nombre' => 'Software',
        ]);

        Tipo_Incidente::create([
            'Nombre' => 'Desconocido',
        ]);
    }
}
