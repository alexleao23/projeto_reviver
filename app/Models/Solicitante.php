<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitantes';
    protected $fillable = ['nome', 'email', 'celular', 'doenca', 'status','sou','projetoreviver'];
    
    public function getShortNomeAttribute()
    {
        $fullname = explode(' ', $this->nome);
        $shortname;
        $first = $fullname[0];
        $last = end($fullname);
        count($fullname) < 2 ? $shortname = $first : $shortname = $first." ".$last;
        return $shortname;
    }
}
