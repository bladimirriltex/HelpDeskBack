<?php

namespace Database\Seeders;

use App\Models\Incidente;
use Illuminate\Database\Seeder;

class IncidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incidente::factory(120)->create();
    }
}
