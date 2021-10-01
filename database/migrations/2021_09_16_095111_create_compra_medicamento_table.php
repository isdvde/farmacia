<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_medicamento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_compra')->index('compra_medicamento_fk');
            $table->integer('id_medicamento')->index('compra_medicamento_fk_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_medicamento');
    }
}
