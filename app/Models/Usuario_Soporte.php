<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario_Soporte extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'usuario_soporte';

    protected $fillable  = [
        'Nombre',
        'Apellido',
        'Id_Cargo',
        'login',
        'password'
    ];

    protected $hidden = [

        'remember_token',
    ];
}
