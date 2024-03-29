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

    protected $primaryKey = 'id';

    protected $fillable  = [
        'Nombre',
        'Apellido',
        'Email',
        'Id_Cargo',
        'Id_User'
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'Id_Cargo', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User', 'id');
    }



}
