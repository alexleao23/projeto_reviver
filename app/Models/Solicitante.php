<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $fillable = ['nome', 'email', 'celular', 'doenca', 'status'];

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
