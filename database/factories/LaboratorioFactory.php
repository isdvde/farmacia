<?php

namespace Database\Factories;

use App\Models\Laboratorio;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratorioFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Laboratorio::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'nombre' => $this->faker->streetName,
			'direccion' => $this->faker->city,
			'telefono' => $this->faker->e164PhoneNumber
		];
	}
}
