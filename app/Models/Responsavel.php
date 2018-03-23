<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $fillable = ['nome', 'data_nasc', 'sexo', 'endereco', 'complemento', 'bairro', 'celular', 'estado_civil'];

    public function paciente()
    {
    	return $this->belongsToMany(Paciente::class);
    }
}
