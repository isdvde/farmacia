<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResponsableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responsable', function (Blueprint $table) {
            $table->foreign('ci', 'responsable_ibfk_1')->references('ci')->on('pasantias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responsable', function (Blueprint $table) {
            $table->dropForeign('responsable_ibfk_1');
        });
    }
}
