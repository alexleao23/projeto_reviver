<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Responsavel extends Model
{
    protected $fillable = ['nome', 'data_nasc', 'sexo', 'endereco', 'complemento', 'bairro', 'celular', 'estado_civil', 'cpf'];

    public function getShortNomeAttribute()
    {
        $fullname = explode(' ', $this->nome);
        $shortname;
        $first = $fullname[0];
        $last = end($fullname);
        count($fullname) < 2 ? $shortname = $first : $shortname = $first." ".$last;
        return $shortname;
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
