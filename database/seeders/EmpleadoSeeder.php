<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Titulo;
use App\Models\Pasantia;
use App\Models\Responsable;


class EmpleadoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Empleado::factory()->create([
			'ci' => 1,
			'nombre' => '',
			'apellido' => 'admin',
		]);

		Empleado::factory()->create([
			'ci' => 2,
			'nombre' => 'Margarita',
			'apellido' => 'Garcia',
		]);


		Empleado::factory()->create([
			'ci' => 3,
			'nombre' => 'Adrian',
			'apellido' => 'Moreno',
		]);



		for ($i=0; $i < 100; $i++) { 
			
			$empleado = Empleado::factory()->create();

			if($empleado->cargo == 'farmaceutico') {
				$titulo = Titulo::factory()->create([
					'ci' => $empleado->ci,
				]);
			} elseif ($empleado->cargo == 'pasante') {
				$pasantia = Pasantia::factory()->create([
					'ci' => $empleado->ci,
				]);

				if ($empleado->edad <= 17) {
					$responsable = Responsable::factory()->create([
						'ci' => $empleado->ci,	
					]);
				}
			}

		}
	}
}
