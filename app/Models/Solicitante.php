<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $fillable = ['nome', 'email', 'celular', 'doenca', 'status'];
}
