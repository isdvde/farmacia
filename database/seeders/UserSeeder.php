<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

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
            User::factory()->create([
             'username' => $username,
             'password' => Hash::make($username),
             'ci' => $empleado->ci,
         ]);
        }
        
    }
}
