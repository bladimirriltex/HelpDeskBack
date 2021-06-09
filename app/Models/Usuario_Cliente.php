<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Cliente extends Model
{
    use HasFactory;

    protected $table = 'usuario_cliente';

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'Email',
        'Id_Rol'
    ];
}
