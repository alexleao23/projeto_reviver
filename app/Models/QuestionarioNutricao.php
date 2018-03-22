<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionarioNutricao extends Model
{
	// protected $fillable = [''];
    public function paciente()
    {
    	return $this->belongsTo(Paciente::class);
    }
}
