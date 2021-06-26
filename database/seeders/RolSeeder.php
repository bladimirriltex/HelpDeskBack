<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'Nombre' => 'Estudiante',
        ]);

        Rol::create([
            'Nombre' => 'Profesor',
        ]);

        Rol::create([
            'Nombre' => 'Adminitrativo',
        ]);

        Rol::create([
            'Nombre' => 'Gerencia',
        ]);
    }
}
