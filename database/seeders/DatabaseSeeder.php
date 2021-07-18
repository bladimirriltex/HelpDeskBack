<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Canal;
use App\Models\Cargo;
use App\Models\Nivel_Riesgo;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'canal',
            'tipo_problema',
            'cargo',
            'solucion',
            'nivel_riesgo',
            'rol',
            'servicio',
            'status',
            'tipo_incidente',
            'usuario_cliente',
            'usuario_soporte',
            'incidente',
            'inventario',
            'configuraciones',
            'version'
        ]);
        $this->call(UserSeeder::class);
        $this->call(CanalSeeder::class);
        $this->call(TipoProblemaSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(SolucionSeeder::class);
        $this->call(NivelRiesgoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TipoIncidenteSeeder::class);
        $this->call(UsuarioClienteSeeder::class);
        $this->call(UsuarioSoporteSeeder::class);
        $this->call(IncidenteSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(ConfiguracionesSeeder::class);
        $this->call(VersionSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
