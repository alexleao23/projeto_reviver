<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionarioNutricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario_nutricaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->enum('antecedente_familiar', ['Diabetes', 'Hipertensão', 'Câncer', 'Alzheimer']);
            $table->enum('antecedente_clinico', ['Tabagista', 'Alcoolista', 'Depressão', 'Doenças Cardiovasculares', 'Infarto', 'Traumatismo Craniano']);
            $table->enum('presenca_doenca', ['SIM', 'NÃO']);
            $table->enum('qual_doenca', ['Diabetes', 'Hipertensão', 'Câncer', 'Artrite Reumatóide', 'Inflamações', 'Infecções', 'Febre', 'Diarréia', 'Outros'])->nullable();
            $table->text('outros_doenca')->nullable();
            $table->enum('medicamento_suplemento', ['SIM', 'NÃO']);
            $table->text('nome_medicamento')->nullable();
            $table->text('inicio_tratamento')->nullable();
            $table->text('posologia')->nullable();
            $table->text('ff')->nullable();
            $table->enum('jejum', ['SIM', 'NÃO'])->nullable();
            $table->enum('toma_prox_alimento', ['SIM', 'NÃO'])->nullable();
            $table->text('qual_alimento')->nullable();
            $table->enum('toma_liquido', ['SIM', 'NÃO'])->nullable();
            // Triagem (máximo de 14 pontos)
            $table->enum('diminu_ingesta_alimentar', [0, 1, 2]);
            $table->enum('perda_peso', [0, 1, 2, 3]);
            $table->enum('mobilidade', [0, 1, 2]);
            $table->enum('stress_doenca', [0, 2]);
            $table->enum('problemas_neuropsicologicos', [0, 1, 2]);
                // Cálculo do IMC
                $table->double('peso', 3, 2);
                $table->double('altura', 1, 2);
                $table->double('imc');
                $table->enum('pontuacao_imc', [0, 1, 2, 3]);
                //
            $table->integer('pontuacao_triagem');
            // Triagem End
            // Global (máximo de 16 pontos)
            $table->enum('vive_emcasa', [0, 1]);
            $table->enum('utiliza_muito_medicamentos', [0, 1]);
            $table->enum('lesoes_pele', [0, 1]);
            $table->enum('refeicoes_dia', [0, 1, 2]);
                // Cálculo Doente Consome
                $table->enum('uma_porcao_diaria_leite', ['SIM', 'NÃO']);
                $table->enum('duas_porcoes_semanais_legumes', ['SIM', 'NÃO']);
                $table->enum('carne_peixe_aves', ['SIM', 'NÃO']);
                $table->enum('pontuacao_doente_consome', [0.0, 0.5, 1.0]);
                //
            $table->enum('duas_porcoes_diarias_frutas', [0, 1]);
            $table->enum('liquido_doente_consome_dia', [0.0, 0.5, 1.0]);
            $table->enum('modo_alimentar', [0, 1, 2]);
            $table->enum('doente_sua_saude', [0.0, 0.5, 1.0, 2.0]);
            $table->enum('pb', [0.0, 0.5, 1.0]);
            $table->enum('pp', [0, 1]);
            $table->double('pontuacao_global');
            //Global End
            $table->double('pontuacao_total');
            // Estado nutricional com base na pontuação total 
                $table->enum('estado_nutricional', ['Normal', 'Risco de Desnutrição', 'Desnutrido']);
            //
            $table->enum('tempo_medio_refeicao', ['Até 30 minutos', 'Mais de 30 minutos']);
            $table->enum('postura_alimentacao', ['Sentada', 'Inclinada']);
            $table->enum('aux_liquido', ['SIM', 'NÃO']);
            $table->enum('restricao_consistencia', ['SIM', 'NÃO']);
            $table->enum('qual_restricao', ['Sólido', 'Pastoso', 'Líquido']);
            $table->enum('usa_mastigacao', ['SIM', 'NÃO']);
            $table->enum('denticao', ['Presente', 'Ausente'])->nullable();
            $table->enum('protese_dentaria', ['SIM', 'NÃO'])->nullable();
            $table->enum('qual_protese', ['Total Superior', 'Total Inferior', 'Pacial Superior', 'Parcial Inferior'])->nullable();
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
        Schema::dropIfExists('questionario_nutricaos');
    }
}
