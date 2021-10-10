<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empleado;

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
    		User::factory()->create([
    			'username' => $empleado->nombre,
    			'ci' => $empleado->ci,
    		]);
    	}
        
    }
}
