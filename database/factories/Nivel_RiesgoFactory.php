<?php

namespace Database\Factories;

use App\Models\Nivel_Riesgo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Nivel_RiesgoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nivel_Riesgo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->sentence(),
            'Descripcion' => $this->faker->text(1600)
        ];
    }
}
