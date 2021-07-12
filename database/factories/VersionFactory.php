<?php

namespace Database\Factories;

use App\Models\Version;
use Illuminate\Database\Eloquent\Factories\Factory;

class VersionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Version::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->numerify('Version #.#.#'),
            'descripcion' => $this->faker->text(500),
            'configuracion' => $this->faker->text(500),
            'id_servicio' => $this->faker->numberBetween(1, 9)
        ];
    }
}
