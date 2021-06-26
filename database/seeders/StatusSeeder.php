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
            'Nombre' => 'Pendiente',
        ]);

        Status::create([
            'Nombre' => 'En Progreso',
        ]);

        Status::create([
            'Nombre' => 'Presencial',
        ]);

        Status::create([
            'Nombre' => 'Resuelto',
        ]);
    }
}
