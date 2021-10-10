<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('ci')->primary();
            $table->integer('id_farmacia')->index('id_farmacia');
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->integer('edad')->nullable();
            $table->string('cargo', 45)->nullable();
            $table->string('telefono', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
