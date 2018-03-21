<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nome','data_nasc','sexo','endereco','complemento','bairro','celular','estado_civil'];
}
