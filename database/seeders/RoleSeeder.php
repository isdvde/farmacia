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
       $role5= Role::create(['name'=>'analista']);
       $role6= Role::create(['name'=>'administrativo']);


        Permission::create(['name' => 'compra.index'])->syncRoles([$role1,$role2,$role5, $role4,$role6]);
        Permission::create(['name' => 'compra.create'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'compra.edit'])->syncRoles([$role1,$role5,$role6]);


        Permission::create(['name' => 'farmacia.index'])->syncRoles([$role1,$role2,$role3, $role5, $role4,$role6]);
        Permission::create(['name' => 'farmacia.create'])->syncRoles([$role1,$role6]);
        Permission::create(['name' => 'farmacia.edit'])->syncRoles([$role1,$role6]);
        Permission::create(['name' => 'farmacia.delete'])->syncRoles([$role1,$role6]);


        Permission::create(['name' => 'medicamento.index'])->syncRoles([$role1,$role5, $role4,$role6]);
        Permission::create(['name' => 'medicamento.create'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'medicamento.edit'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'medicamento.delete'])->syncRoles([$role1,$role5,$role6]);


        Permission::create(['name' => 'inventario.index'])->syncRoles([$role1,$role2,$role3,$role5, $role4,$role6]);
        Permission::create(['name' => 'inventario.create'])->syncRoles([$role1,$role5,$role6]);


        Permission::create(['name' => 'laboratorio.index'])->syncRoles([$role1,$role2,$role3,$role5, $role4,$role6]);
        Permission::create(['name' => 'laboratorio.create'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'laboratorio.edit'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'laboratorio.delete'])->syncRoles([$role1,$role5,$role6]);


        Permission::create(['name' => 'pedido.index'])->syncRoles([$role1,$role2,$role3,$role5, $role4,$role6]);
        Permission::create(['name' => 'pedido.create'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'pedido.edit'])->syncRoles([$role1,$role5,$role6]);
        Permission::create(['name' => 'pedido.delete'])->syncRoles([$role1,$role5,$role6]);


        Permission::create(['name' => 'empleado.index'])->syncRoles([$role1,$role2,$role6]);
        Permission::create(['name' => 'empleado.create'])->syncRoles([$role1,$role6]);
        Permission::create(['name' => 'empleado.edit'])->syncRoles([$role1,$role6]);
        Permission::create(['name' => 'empleado.delete'])->syncRoles([$role1,$role6]);
    }
}
