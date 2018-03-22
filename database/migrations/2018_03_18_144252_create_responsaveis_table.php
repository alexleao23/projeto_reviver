<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsaveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nasc');
            $table->enum('sexo', ['M', 'F']);
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('celular');
            $table->enum('estado_civil', ['Solteiro(a)', 'Casado(a)', 'Desquitado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Outros']);
            $table->integer('pacientes_id');
            $table->foreign('pacientes_id')->references('id')->on('pacientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsaveis');
    }
}
