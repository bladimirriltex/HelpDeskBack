<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Canal;
use App\Models\Cargo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Canal::factory(10)->create();
        Cargo::factory(10)->create();
    }
}
