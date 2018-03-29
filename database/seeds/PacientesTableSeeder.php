<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Paciente;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paciente = Paciente::create([
        	'nome' => 'Paciente',
            'data_nasc' => '1996-01-01',
            'sexo' => 'Feminino',
            'endereco' => 'xxxxxxxxxxxx',
            'complemento' => 'xxxxxxxxxxxx',
            'bairro' => 'xxxxxxxxxxx', 
            'celular' => '(88)88888-8888',
            'estado_civil' => 'Solteiro(a)',
            'cpf' => '555.555.555-55',
            'responsavel_id' => 1,
            'escolaridade' => 'ESI',
            'fuma' => 'NÃO',
            'bebida_alcoolica' => 'NÃO',
            'horario_atend' => 'Manhã',
            'dia_atend' => 'Segunda',
            'sabendo_projeto' => 'Redes Sociais',
            'diagnostico_paciente' => 'Doença de Parkinson (DP)',
            'tempo_doenca' => '2 anos',
            'uso_medicamentos' => 'NÃO',
            'tratamento_smed' => 'NÃO',
            'incapaz_realizar_atividades_domesticas' => 'NÃO',
            'atividades_lazer' => 'NÃO',
            'interferido_atividades_lazer' => 'NÃO',
            'atividade_fisica' => 'NÃO',
            'atividades_religiosas' => 'NÃO',
            'como_locomover' => 'Carro'
        ]);
    }
}
