<?php

namespace Database\Factories;

use App\Models\Configuraciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConfiguracionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuraciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'configuracion' => $this->faker->text(500),
            'id_inventario' => $this->faker->numberBetween(1, 10),
        ];
    }
}
