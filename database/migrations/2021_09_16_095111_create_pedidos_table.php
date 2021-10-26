<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_farmacia')->index('id_farmacia');
            $table->integer('id_laboratorio')->index('id_laboratorio');
            $table->integer('id_empleado')->index('id_empleado');
            $table->string('forma_pago', 45)->nullable();
            $table->string('slug', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
