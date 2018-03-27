<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsavelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->date('data_nasc');
            $table->enum('sexo', ['Masculino', 'Feminino']);
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('celular');
            $table->enum('estado_civil', ['Solteiro(a)', 'Casado(a)', 'Desquitado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Outros']);
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
        Schema::dropIfExists('responsavels');
    }
}
