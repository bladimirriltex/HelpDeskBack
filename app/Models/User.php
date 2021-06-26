<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;


    protected $fillable = [

        'login',
        'password',
    ];


    protected $hidden = [
        'password',
    ];

    public function usuarios_clientes()
    {
        return $this->hasMany(Usuario_Cliente::class, 'Id_User', 'id');
    }

    public function usuarios_soportes()
    {
        return $this->hasMany(Usuario_Soporte::class, 'Id_User', 'id');
    }
}
