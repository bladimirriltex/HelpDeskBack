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
            'Nombre' => 'Fisico',
        ]);

        Tipo_Incidente::create([
            'Nombre' => 'Virtual',
        ]);
    }
}
