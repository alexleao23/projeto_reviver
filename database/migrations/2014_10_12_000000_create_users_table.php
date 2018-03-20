<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('cpf')->unique();
            $table->string('celular');
            $table->enum('perfil', ['Nutrição', 'Fisioterapia', 'Enfermagem', 'Medicina', 'Ed. Física', 'Farmácia', 'Admin']);
            $table->enum('lvpermissao', ['Admin', 'Coordenador', 'Aluno']);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
