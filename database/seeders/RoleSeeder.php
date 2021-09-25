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
       $role1= Role::create(['name'=>'Admin']);
       $role2= Role::create(['name'=>'Farmaceutico']);
       $role3= Role::create(['name'=>'Auxiliar']);
       $role4= Role::create(['name'=>'pasantes']);

        Permission::create(['name' => 'admin.home'])->assignRole($role1);
        Permission::create(['name' => 'farmaceutico.home'])->assignRole($role2);
        Permission::create(['name' => 'auxiliar.home'])->assignRole($role3);
        Permission::create(['name' => 'pasante.home'])->assignRole($role4);
    }
}
