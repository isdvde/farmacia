<?php

namespace Database\Factories;

use App\Models\Titulo;
use Illuminate\Database\Eloquent\Factories\Factory;


class TituloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Titulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci' => $this->faker->randomNumber($nbDigits = 6),
            'universidad' => $this->faker->word,
            'fecha' => $this->faker->date($format = 'Y-m-d'), 
            'n_registro' => $this->faker->randomNumber($nbDigits = 6),
            'p_sanitario' => $this->faker->randomNumber($nbDigits = 6),
            'n_colegiatura' => $this->faker->randomNumber($nbDigits = 6),
        ];
    }
}
