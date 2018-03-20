<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'cpf', 'celular', 'perfil', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getShortNameAttribute()
    {
        $fullname = explode(' ',$this->name);
        $first = $fullname[0];
        $last = end($fullname);
        return $shortname = $first." ".$last;
    }

    public function isNutricao()
    {
        return Auth::user()->perfil == 'Nutrição';
    }

    public function isFisioterapia()
    {
        return Auth::user()->perfil == 'Fisioterapia';
    }

    public function isEnfermagem()
    {
        return Auth::user()->perfil == 'Enfermagem';
    }
    public function isMedicina()
    {
        return Auth::user()->perfil == 'Medicina';
    }
    public function isEdFisica()
    {
        return Auth::user()->perfil == 'Ed. Física';
    }
    public function isFarmacia()
    {
        return Auth::user()->perfil == 'Farmacia';
    }
    public function isAdmin()
    {
        return Auth::user()->perfil == 'Admin';
    }
}
