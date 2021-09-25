<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantias', function (Blueprint $table) {
            $table->integer('ci')->primary();
            $table->string('institucion', 45)->nullable();
            $table->string('especialidad', 45)->nullable();
            $table->date('f_inicio')->nullable();
            $table->date('f_final')->nullable();
            $table->integer('n_permiso')->nullable();
            $table->boolean('minoria_edad')->nullable();
            $table->boolean('activo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasantias');
    }
}
