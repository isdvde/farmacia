<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Inventario::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'id_farmacia'=> $this->faker->numberBetween($min = 1, $max = 15),
			'id_medicamento'=> $this->faker->numberBetween($min = 1, $max = 200),
			'cantidad' => $this->faker->numberBetween($min = 20, $max = 100),
		];
	}
}
