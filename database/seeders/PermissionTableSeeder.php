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
            'show',
		];

		foreach ($permission as $p) {
			foreach ($subPermission as $sp) {
				Permission::create(['name' => $p.'.'.$sp]);    
			}
		}
	}
}
