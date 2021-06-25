<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Login',
        'Password',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    public function usuarios_soporte()
    {
        return $this->hasMany(Usuario_Soporte::class, 'Id_User' , 'id');
    }

    public function usuarios_cliente()
    {
        return $this->hasMany(Usuario_Cliente::class, 'Id_User' , 'id');
    }

}
