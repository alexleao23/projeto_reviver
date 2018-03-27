<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Responsavel extends Model
{
    protected $fillable = ['nome', 'data_nasc', 'sexo', 'endereco', 'complemento', 'bairro', 'celular', 'estado_civil'];

    public function getShortNomeAttribute()
    {
        $fullname = explode(' ', $this->nome);
        $first = $fullname[0];
        $last = end($fullname);
        return $shortname = $first." ".$last;
    }

    public function paciente()
    {
    	return $this->hasMany(Paciente::class);
    }


    public function getDataNascFormatadaAttribute()
    {
        if($this->attributes['data_nasc']) {
            return \Carbon\Carbon::parse($this->attributes['data_nasc'])->format('d/m/Y');
        }
    }
    public function getIdadeAttribute()
    {   
        $idade = \Carbon\Carbon::parse($this->attributes['data_nasc'])->age;

        if ($this->attributes['data_nasc']) {
            if ($idade == 1) {
                $idade = $idade . " ANO";
            }else{
                $idade = $idade . " ANOS";
            }
            return $idade;
        }
    }
}
