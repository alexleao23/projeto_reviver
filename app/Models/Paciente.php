<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responsavel;
use App\Models\QuestionarioNutricao;

class Paciente extends Model
{
    protected $fillable = ['nome','data_nasc','sexo','endereco','complemento','bairro','celular','estado_civil', 'responsavel_id'];

    public function responsavel()
    {
    	return $this->hasOne(Responsavel::class);
    }

    public function questionarioNutricao()
    {
    	return $this->hasOne(QuestionarioNutricao::class);
    }
}