<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCompraMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra_medicamento', function (Blueprint $table) {
            $table->foreign('id_compra', 'compra_medicamento_fk')->references('id')->on('compras');
            $table->foreign('id_medicamento', 'compra_medicamento_fk_1')->references('id')->on('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra_medicamento', function (Blueprint $table) {
            $table->dropForeign('compra_medicamento_fk');
            $table->dropForeign('compra_medicamento_fk_1');
        });
    }
}
