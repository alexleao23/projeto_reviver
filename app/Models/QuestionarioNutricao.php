<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class QuestionarioNutricao extends Model
{
	protected $guarded = [];

    public function paciente()
    {
    	return $this->hasOne(Paciente::class);
    }
}
