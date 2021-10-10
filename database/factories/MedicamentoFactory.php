<?php

namespace Database\Factories;

use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monodroga' => $this->faker->word,
            'presentacion'=> $this->faker->word,
            'accion'=> $this->faker->word,
            'precio' => $this->faker->randomNumber($nbDigits = 5, $strict = false)
        ];
    }
}
