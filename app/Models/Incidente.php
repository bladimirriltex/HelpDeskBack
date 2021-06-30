<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;

    protected $table = 'incidente';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombres',
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

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'Id_Servicio', 'id');
    }

    public function tipo_incidente()
    {
        return $this->belongsTo(Tipo_Incidente::class, 'Id_TipoIncidente', 'id');
    }

    public function canal()
    {
        return $this->belongsTo(Canal::class, 'Id_Canal', 'id');
    }

    public function nivel_riesgo()
    {
        return $this->belongsTo(Nivel_Riesgo::class, 'Id_NivelRiesgo', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'Id_Status', 'id');
    }

    public function usuario_cliente()
    {
        return $this->belongsTo(Usuario_Cliente::class, 'Id_UsuarioCliente', 'id');
    }

    public function usuario_soporte()
    {
        return $this->belongsTo(Usuario_Soporte::class, 'Id_UsuarioSoporte', 'id');
    }

    public function soluciones()
    {
        return $this->hasMany(Solucion::class, 'Id_Incidente' , 'id');
    }
}
