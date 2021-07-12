<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => 'Maquina '.$this->faker->unique()->countryCode,
            'ubicacion' => 'Salon '.$this->faker->numberBetween(1, 600),
            'nombre_usuario' => $this->faker->name(),
        ];
    }
}
