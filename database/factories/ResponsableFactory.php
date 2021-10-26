<?php

namespace Database\Factories;

use App\Models\Responsable;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Responsable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci' => $this->faker->randomNumber($nbDigits = 6),
            'ci_representante' => $this->faker->randomNumber($nbDigits = 6),
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'telefono' => $this->faker->e164PhoneNumber,
        ];
    }
}
