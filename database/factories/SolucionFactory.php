<?php

namespace Database\Factories;

use App\Models\Solucion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolucionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solucion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->sentence(),
            'Descripcion' => $this->faker->text(500),
        ];
    }
}
