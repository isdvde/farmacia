<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Pasantia;
use App\Models\Responsable;
use App\Models\Titulos;
use Illuminate\Database\Eloquent\Factories\Factory;


class EmpleadoFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Empleado::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [

			'ci' => $this->faker->randomNumber($nbDigits = 7, $strict = false),
			'id_farmacia' => $this->faker->numberBetween($min = 1, $max = 15),
			'nombre' => $this->faker->firstName,
			'apellido' => $this->faker->lastName,
			'edad' => $this->faker->numberBetween($min = 15, $max = 50),
			'cargo' => $this->faker->randomElement($array = [
				"pasante",
				"administrativo",
				"farmaceutico",
				"vigilante",
				"analista",
			]),
			'telefono' => $this->faker->e164PhoneNumber,

		];
	}
}
