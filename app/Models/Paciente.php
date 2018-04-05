<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responsavel;
use App\Models\QuestionarioNutricao;

class Paciente extends Model
{
    protected $guarded = [];

    public function getShortNomeAttribute()
    {
        $fullname = explode(' ', $this->nome);
        $shortname;
        $first = $fullname[0];
        $last = end($fullname);
        count($fullname) < 2 ? $shortname = $first : $shortname = $first." ".$last;
        return $shortname;
    }

    public function responsavel()
    {
    	return $this->belongsTo(Responsavel::class);
    }

    public function questionarioNutricao()
    {
    	return $this->hasOne(QuestionarioNutricao::class);
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