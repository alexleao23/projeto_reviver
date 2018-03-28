<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
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
            $table->integer('responsavel_id');
            $table->foreign('responsavel_id')->references('id')->on('responsavels');
            $table->enum('escolaridade', ['Analfabeto', 'EFI', 'EFC', 'EMI', 'EMC', 'ESI', 'ESC', 'Pós-graduação']);
            $table->enum('fuma', ['SIM', 'NÃO', 'PAROU']);
            $table->text('tempo_fuma')->nullable();
            $table->enum('bebida_alcoolica', ['SIM', 'NÃO']);
            $table->enum('quantos_dias_mes', ['Raramente', '1 dia no mês', '2-5 dias', '5-10 dias', 'Mais de 10 dias'])->nullable();
            $table->enum('horario_atend', ['Manhã', 'Tarde']);
            $table->enum('dia_atend', ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado']);
            $table->enum('sabendo_projeto', ['Redes Sociais', 'Amigos, Parentes, Vizinhos', 'Universidade', 'Outros']);
            $table->text('por_onde')->nullable();
            $table->enum('diagnostico_paciente', ['Doença de Alzheimer (DA)', 'Doença de Parkinson (DP)']);
            $table->enum('tempo_doenca', ['1 ano', '2 anos', '3 anos', 'Outro']);
            $table->string('tempo_outro')->nullable();
            $table->enum('uso_medicamentos', ['SIM', 'NÃO']);
            $table->enum('sob_prescricao', ['SIM', 'NÃO'])->nullable();
            $table->string('medico_prescreveu')->nullable();
            $table->text('nome_medicamentos')->nullable();
            $table->string('dose')->nullable();
            $table->text('horarios')->nullable();
            $table->enum('tratamento_smed', ['SIM', 'NÃO']);
            $table->text('quais_tratamentos')->nullable();
            $table->enum('incapaz_realizar_atividades_domesticas', ['SIM', 'NÃO']);
            $table->text('quais_atividades')->nullable();
            $table->enum('atividades_lazer', ['SIM', 'NÃO']);
            $table->text('quais_atividades_lazer')->nullable();
            $table->enum('interferido_atividades_lazer', ['SIM', 'NÃO']);
            $table->text('de_que_maneira')->nullable();
            $table->enum('atividade_fisica', ['SIM', 'NÃO']);
            $table->text('quais_atividades_fisicas')->nullable();
            $table->enum('atividades_religiosas', ['SIM', 'NÃO']);
            $table->text('quais_atividades_religiosas')->nullable();
            $table->enum('como_locomover', ['Carro', 'Transporte Público', 'Bicicleta', 'Motocicleta', 'A pé']);
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
        Schema::dropIfExists('pacientes');
    }
}
