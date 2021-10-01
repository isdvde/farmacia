<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratorioMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio_medicamento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_laboratorio')->index('laboratorio_medicamento_fk');
            $table->integer('id_medicamento')->index('laboratorio_medicamento_fk_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorio_medicamento');
    }
}
