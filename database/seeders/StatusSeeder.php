<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'Nombre' => 'Clasificado',
        ]);

        Status::create([
            'Nombre' => 'Asignado',
        ]);

        Status::create([
            'Nombre' => 'En diagnostico',
        ]);

        Status::create([
            'Nombre' => 'Error',
        ]);

        Status::create([
            'Nombre' => 'Error Conocido',
        ]);

        Status::create([
            'Nombre' => 'En Solucion',
        ]);

        Status::create([
            'Nombre' => 'Solucionado',
        ]);

        Status::create([
            'Nombre' => 'Cerrado',
        ]);
    }
}
