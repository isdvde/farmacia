<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPedidoMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido_medicamento', function (Blueprint $table) {
            $table->foreign('id_pedido', 'pedido_medicamento_ibfk_1')->references('id')->on('pedidos')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->foreign('id_medicamento', 'pedido_medicamento_ibfk_2')->references('id')->on('medicamentos')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido_medicamento', function (Blueprint $table) {
            $table->dropForeign('pedido_medicamento_ibfk_1');
            $table->dropForeign('pedido_medicamento_ibfk_2');
        });
    }
}
