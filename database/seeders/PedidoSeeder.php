<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PedidoMedicamento;
use App\Models\Pedido;

class PedidoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($n=0; $n < 250; $n++) { 

			$pedido = Pedido::factory()->create();

			for ($i=0; $i < 10; $i++) { 
				PedidoMedicamento::factory()->create([
					'id_pedido' => $pedido->id,
				]);
			}
		}
	}
}
