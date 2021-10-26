<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{


		/*Permission::create(['name' => 'empleado.*']);
		Permission::create(['name' => 'farmacia.*']);
		Permission::create(['name' => 'inventario.*']);
		Permission::create(['name' => 'laboratorio.*']);
		Permission::create(['name' => 'medicamento.*']);
		Permission::create(['name' => 'pedido.*']);*/

		$permission = [
			'empleado',
			'farmacia',
			'inventario',
			'laboratorio',
			'medicamento',
			'pedido',
			'compra',
		];

		$subPermission = [
			'view',
			'create',
			'edit',
			'delete',
		];

		foreach ($permission as $p) {
			foreach ($subPermission as $sp) {
				Permission::create(['name' => $p.'.'.$sp]);
			}
		}

/*
		Permission::findOrCreate('empleado.*');
		Permission::findOrCreate('farmacia.*');
		Permission::findOrCreate('inventario.*');
		Permission::findOrCreate('laboratorio.*');
		Permission::findOrCreate('medicamento.*');
		Permission::findOrCreate('pedido.*');*/
	}
}
