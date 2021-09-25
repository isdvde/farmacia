<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->integer('ci')->primary();
            $table->string('universidad', 45)->nullable();
            $table->date('fecha')->nullable();
            $table->integer('n_registro')->nullable();
            $table->integer('p_sanitario')->nullable();
            $table->integer('n_colegiatura')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulos');
    }
}
