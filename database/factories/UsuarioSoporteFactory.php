<?php

namespace Database\Factories;

use App\Models\Usuario_Soporte;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioSoporteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario_Soporte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName,
            'Apellidos' => $this->faker->lastName,
            'Email' => $this->faker->unique()->safeEmail,
            'Id_Cargo' => $this->faker->numberBetween(1, 3),
            'Id_User' => $this->faker->unique()->numberBetween(1, 3),
        ];
    }
}
