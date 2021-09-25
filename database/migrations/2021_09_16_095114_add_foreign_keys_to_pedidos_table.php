<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('id_farmacia', 'pedidos_ibfk_1')->references('id')->on('farmacias');
            $table->foreign('id_laboratorio', 'pedidos_ibfk_2')->references('id')->on('laboratorios');
            $table->foreign('id_empleado', 'pedidos_ibfk_3')->references('ci')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('pedidos_ibfk_1');
            $table->dropForeign('pedidos_ibfk_2');
            $table->dropForeign('pedidos_ibfk_3');
        });
    }
}
