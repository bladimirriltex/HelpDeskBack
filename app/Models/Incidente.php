<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Fecha_Inicio',
        'Fecha_Fin',
        'Descripcion',
        'Respuesta',
        'Archivo',
        'Id_Servicio',
        'Id_TipoIncidente',
        'Id_Canal',
        'Id_NivelRiesgo',
        'Id_Status',
        'Id_UsuarioCliente',
        'Id_UsuarioSoporte'
    ];
}
