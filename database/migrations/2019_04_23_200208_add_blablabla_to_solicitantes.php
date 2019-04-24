<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlablablaToSolicitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitantes', function (Blueprint $table) 
        {
            $table->string('sou')->nullable();
            $table->string('projetoreviver')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitantes', function (Blueprint $table) 
        {
            $table->dropColumn('sou')->nullable();
            $table->dropColumn('projetoreviver')->nullable();
        }); 
    }
}
