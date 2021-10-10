<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Pedido::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'id_farmacia' => $this->faker->numberBetween($min = 1, $max = 15),
			'id_laboratorio' => $this->faker->numberBetween($min = 1, $max = 30),
			'id_empleado' => 1, 
			'forma_pago' => $this->faker->randomElement( 
				$forma_pago = array(
					'contado', '5d', '10d', '15d', '20d', '30d',
				)
			),
		];
	}
}
