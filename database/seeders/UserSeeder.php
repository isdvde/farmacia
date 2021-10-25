<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (Empleado::all() as $empleado) {

			for($i=1;; $i++) { 
				$username = strtolower(substr($empleado->nombre, 0, $i).$empleado->apellido);
				if (!(User::where('username',$username)->first())) {
					break;
				}
			}

			$user = User::factory()->create([
				'username' => $username,
				'password' => Hash::make($username),
				'ci' => $empleado->ci,
			]);

			$user->assignRole($empleado->cargo);
			$user->givePermissionTo(Role::findByName($empleado->cargo)->permissions()->pluck('name'));
		}
	}
}
