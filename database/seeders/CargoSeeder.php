<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'Nombre' => 'Operador Soporte',
            'Descripcion' => 'El operador soporte se encarga de dar soluciones a problemas ya conocidos'
        ]);

        Cargo::create([
            'Nombre' => 'Tecnico Soporte',
            'Descripcion' => 'El tecnico soporte se encarga de dar soluciones a nuevos problemas'
        ]);

        Cargo::create([
            'Nombre' => 'Analista Especializado',
            'Descripcion' => 'El analista especializado se encarga de dar soluciones a problemas 
                            mas complejos los cuales no pueden ser soluionados con facilidad'
        ]);
    }
}
