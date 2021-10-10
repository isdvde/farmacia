<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventario', function (Blueprint $table) {
            $table->foreign('id_farmacia', 'inventario_fk')->references('id')->on('farmacias')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->foreign('id_medicamento', 'inventario_fk_1')->references('id')->on('medicamentos')
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
        Schema::table('inventario', function (Blueprint $table) {
            $table->dropForeign('inventario_fk');
            $table->dropForeign('inventario_fk_1');
        });
    }
}
