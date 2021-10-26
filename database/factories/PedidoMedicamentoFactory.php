<?php

namespace Database\Factories;

use App\Models\PedidoMedicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoMedicamentoFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = PedidoMedicamento::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'id_pedido' => $this->faker->numberBetween($min = 1, $max = 300),
			'id_medicamento' => $this->faker->numberBetween($min = 1, $max = 200),
			'cantidad' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
		];
	}
}
