<?php

namespace Database\Factories;

use App\Models\Usuario_Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class Usuario_ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario_Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastName,
            'Email' => $this->faker->unique()->safeEmail,
            'Id_Rol' => $this->faker->numberBetween(1, 4),
            'Id_User' => $this->faker->unique()->numberBetween(4, 8),
        ];
    }
}
