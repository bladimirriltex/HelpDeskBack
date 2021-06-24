<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario_Soporte extends Model
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
