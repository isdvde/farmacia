<?php

namespace Database\Factories;

use App\Models\Pasantia;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasantiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasantia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci' => $this->faker->randomNumber($nbDigits = 7, $strict = false),
            'institucion' => $this->faker->city,
            'especialidad' => $this->faker->word,
            'f_inicio' => $this->faker->date($format = 'Y-m-d'),
            'f_final' => $this->faker->date($format = 'Y-m-d'),
            'n_permiso' => $this->faker->randomNumber($nbDigits = 7, $strict = false),
            'activo' => $this->faker->randomElement($array = array (1,0)),
        ];
    }
}
