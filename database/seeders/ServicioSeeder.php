<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'Nombre' => 'SAE',
        ]);

        Servicio::create([
            'Nombre' => 'Canvas',
        ]);

        Servicio::create([
            'Nombre' => 'Zoom',
        ]);

        Servicio::create([
            'Nombre' => 'Correo',
        ]);

        Servicio::create([
            'Nombre' => 'Potal Estudiante',
        ]);

        Servicio::create([
            'Nombre' => 'UTP+',
        ]);

        Servicio::create([
            'Nombre' => 'Portal del Docente',
        ]);

        Servicio::create([
            'Nombre' => 'CALEDU',
        ]);

        Servicio::create([
            'Nombre' => 'CAD',
        ]);
    }
}
