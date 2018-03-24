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
        'name', 'email', 'cpf', 'celular', 'perfil', 'lvpermissao', 'password'
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

    public function isAdmin()
    {
        return Auth::user()->lvpermissao == 'Administrador';
    }

    public function isCoordenador()
    {
        return Auth::user()->lvpermissao == 'Coordenador';
    }
    public function isTecnicoBolsista()
    {
        return Auth::user()->lvpermissao == 'Aluno';
    }
}
