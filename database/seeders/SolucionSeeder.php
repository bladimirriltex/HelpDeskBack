<?php

namespace Database\Seeders;

use App\Models\Solucion;
use Illuminate\Database\Seeder;

class SolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Solucion::factory()->count(5)->create();
    }
}
