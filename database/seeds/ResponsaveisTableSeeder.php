<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Responsavel;

class ResponsaveisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responsavel = Responsavel::create([
        	'nome' => 'Responsavel',
            'data_nasc' => '1980-01-01',
            'sexo' => 'Masculino',
            'endereco' => 'xxxxxxxxxxxx',
            'complemento' => 'xxxxxxxxxxxx',
            'bairro' => 'xxxxxxxxxxx', 
            'celular' => '(99)99999-9999',
            'estado_civil' => 'Solteiro(a)',
            'cpf' => '333.333.333-33'
        ]);
    }
}
