<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Farmacia;
use App\Models\Empleado;
use App\Models\User;
use App\Models\Medicamento;
use App\Models\Laboratorio;
use App\Models\Inventario;
use App\Models\Pedido;
use App\Models\PedidoMedicamento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Farmacia::factory(15)->create();
        Medicamento::factory(200)->create();
        Laboratorio::factory(30)->create();
        Inventario::factory(500)->create();
        $this->call(EmpleadoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PedidoSeeder::class);
    }
}
