<?php

namespace Database\Seeders;

use App\Models\Canal;
use Illuminate\Database\Seeder;

class CanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canal::create([
            'Nombre' => 'Plataforma Help Desk',
            'Descripcion' => 'El canal de comunicacion se realiza por la pagina web de la mesa de ayuda'
        ]);

        Canal::create([
            'Nombre' => 'Call Center',
            'Descripcion' => 'El canal de comunicacion se realiza por el call center de la mesa de ayuda'
        ]);

        Canal::create([
            'Nombre' => 'Correo',
            'Descripcion' => 'El canal de comunicacion se realiza por medio de correo electronico'
        ]);
    }
}
