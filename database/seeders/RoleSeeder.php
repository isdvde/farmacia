<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
/*		$admin = Role::create(['name' => 'admin']);
		$farmaceutico = Role::create(['name' => 'farmaceutico']);
		$analista = Role::create(['name' => 'analista']);
		$pasante = Role::create(['name' => 'pasante']);*/

		Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
		Role::create(['name' => 'vigilante']);
		Role::create(['name' => 'administrativo']);
		Role::create(['name' => 'farmaceutico'])->givePermissionTo([
			'inventario.view',
			'inventario.create',
			'inventario.edit',
			'medicamento.create',
			'medicamento.view',
			'medicamento.edit',
/*			'inventario,medicamento.*'*/
		]);
		Role::create(['name' => 'analista'])->givePermissionTo([
				'inventario.view',
				'inventario.create',
				'inventario.edit',
				'medicamento.create',
				'medicamento.view',
				'medicamento.edit',
				'pedido.create',
				'pedido.view',
				'pedido.edit',
				'laboratorio.create',
				'laboratorio.view',
				'laboratorio.edit',
/*			'inventario,medicamento,pedido,laboratorio.*'*/
		]);
		Role::create(['name' => 'pasante'])->givePermissionTo([
			'inventario.view',
			'medicamento.view',

/*			'inventario,medicamento.view'*/
		]);



	}
}
