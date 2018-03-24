<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionariosNutricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionarios_nutricao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('horario_atend');
            $table->string('dia_atend');
            $table->string('cfspr');
            $table->string('diagnostico_paciente');
            $table->string('tempo_doenca');
            $table->enum('uso_medicamento', ['SIM', 'NÃO']);
            $table->enum('sob_prescricao', ['SIM', 'NÃO']);->nullable();
            $table->string('medico_que_prescreveu')->nullable();
            $table->text('nome_medicamentos')->nullable();
            $table->string('dose')->nullable();
            $table->text('horario')->nullable(); //botei text porque pode ser mais de um horario por dia, time só ia da pra por um.
            $table->enum('faz_tratamento_med', ['SIM', 'NÃO']);
            $table->text('quais_tratamento')->nullable();
            $table->enum('incapaz_realizar_atividades_domesticas', ['SIM', 'NÃO']);
            $table->text('quais_atividades')->nullable();
            $table->enum('atividades_lazer', ['SIM', 'NÃO']);
            $table->text('quais_atividades_lazer')->nullable();
            $table->enum('estado_saude_interferido_atividades_lazer', ['SIM', 'NÃO']);
            $table->text('de_que_maneira')->nullable();
            $table->enum('atividade_fisica', ['SIM', 'NÃO']);
            $table->text('quais_atividades_fisicas')->nullable();
            $table->enum('atividades_religiosas', ['SIM', 'NÃO']);
            $table->text('quais_atividades_religiosas')->nullable();
            $table->enum('como_locomover', ['Carro', 'Transporte Público', 'Bicicleta', 'Motocicleta', 'A Pé']);
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
        Schema::dropIfExists('questionarios_nutricao');
    }
}
