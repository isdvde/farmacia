<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLaboratorioMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laboratorio_medicamento', function (Blueprint $table) {
            $table->foreign('id_laboratorio', 'laboratorio_medicamento_fk')->references('id')->on('laboratorios')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->foreign('id_medicamento', 'laboratorio_medicamento_fk_1')->references('id')->on('medicamentos')
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
        Schema::table('laboratorio_medicamento', function (Blueprint $table) {
            $table->dropForeign('laboratorio_medicamento_fk');
            $table->dropForeign('laboratorio_medicamento_fk_1');
        });
    }
}
