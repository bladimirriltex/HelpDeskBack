<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    use HasFactory;

    protected $filliable = [
        'Nombre',
        'Descripcion',
        'Fecha',
        'Id_Incidente'
    ];
}
