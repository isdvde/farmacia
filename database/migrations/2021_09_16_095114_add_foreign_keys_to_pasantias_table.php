<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasantias', function (Blueprint $table) {
            $table->foreign('ci', 'pasantias_ibfk_1')->references('ci')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasantias', function (Blueprint $table) {
            $table->dropForeign('pasantias_ibfk_1');
        });
    }
}
