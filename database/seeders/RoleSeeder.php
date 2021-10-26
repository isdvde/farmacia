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
		Role::create(['name' => 'vigilante'])->givePermissionTo([

            'farmacia.view',

		]);


		Role::create(['name' => 'administrativo'])->givePermissionTo([
			'inventario.view',
			'medicamento.view',
            'farmacia.view',
            'compra.view',
            'pedido.view',
            'laboratorio.view',


		]);
		Role::create(['name' => 'farmaceutico'])->givePermissionTo([
			'inventario.view',
		//	'inventario.create',
		//	'inventario.edit',
			'medicamento.create',
			'medicamento.view',
			'medicamento.edit',
            'laboratorio.view',
            'farmacia.view',

		]);
		Role::create(['name' => 'analista'])->givePermissionTo([
				'inventario.view',
			//	'inventario.create',
			//	'inventario.edit',  
				'medicamento.create',
				'medicamento.view',
				'medicamento.edit',
				'pedido.create',
				'pedido.view',
				'pedido.edit',
                'pedido.show',
				'laboratorio.create',
				'laboratorio.view',
				'laboratorio.edit',
				'compra.create',
				'compra.view',
				'compra.edit',
                'compra.show',
				'farmacia.view',
                'farmacia.show',


/*			'inventario,medicamento,pedido,laboratorio.*'*/
		]);
		Role::create(['name' => 'pasante'])->givePermissionTo([
			'inventario.view',
			'medicamento.view',
            'farmacia.view',
/*			'inventario,medicamento.view'*/
		]);



	}
}
