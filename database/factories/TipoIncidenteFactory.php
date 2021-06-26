<?php

namespace Database\Factories;

use App\Models\Tipo_Incidente;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoIncidenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipo_Incidente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->sentence(),
            'Descripcion' => $this->faker->text(500)
        ];
    }
}
