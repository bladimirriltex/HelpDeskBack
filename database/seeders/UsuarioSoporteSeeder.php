<?php

namespace Database\Seeders;

use App\Models\Usuario_Soporte;
use Illuminate\Database\Seeder;

class UsuarioSoporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario_Soporte::create([
            'Nombre' => 'Marcos Andres',
            'Apellido' => 'Aliaga Torres',
            'Email' => 'marcos_at@utp.edu.pe',
            'Id_Cargo' => 1,
            'Id_User' => 1,
        ]);

        Usuario_Soporte::create([
            'Nombre' => 'Andrea',
            'Apellido' => 'Lopez Zuñiga',
            'Email' => 'andrea_lz@utp.edu.pe',
            'Id_Cargo' => 2,
            'Id_User' => 2,
        ]);

        Usuario_Soporte::create([
            'Nombre' => 'Eduardo Alvaro',
            'Apellido' => 'Chocacno Gomez',
            'Email' => 'eduardo_cg@utp.edu.pe',
            'Id_Cargo' => 3,
            'Id_User' => 3,
        ]);
    }
}
