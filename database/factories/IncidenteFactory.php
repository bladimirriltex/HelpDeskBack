<?php

namespace Database\Factories;

use App\Models\Incidente;
use Illuminate\Database\Eloquent\Factories\Factory;

class IncidenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Incidente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->sentence,
            'Descripcion' => $this->faker->text(1600),
            'Id_Servicio' => $this->faker->numberBetween(1, 9),
            'Id_TipoIncidente' => $this->faker->numberBetween(1, 2),
            'Id_Canal' => $this->faker->numberBetween(1, 3),
            'Id_NivelRiesgo' => $this->faker->numberBetween(1, 5),
            'Id_Status' => $this->faker->numberBetween(1, 4),
            'Id_UsuarioCliente' => $this->faker->numberBetween(1, 5),
            'Id_UsuarioSoporte' => $this->faker->numberBetween(1, 3),
            'id_problema' => $this->faker->numberBetween(1, 5),
            'id_solucion' => $this->faker->numberBetween(1, 5),
        ];
    }
}
