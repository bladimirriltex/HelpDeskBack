<?php

namespace Database\Seeders;

use App\Models\Usuario_Cliente;
use Illuminate\Database\Seeder;

class UsuarioClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario_Cliente::factory(50)->create();
    }
}
