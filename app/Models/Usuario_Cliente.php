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
        'Apellido',
        'Email',
        'Id_Rol',
        'Id_User'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User', 'id');
    }
}
