<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel_Riesgo extends Model
{
    use HasFactory;
    protected $table = 'nivel_riesgo';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    public function incidentes()
    {
        return $this->hasMany(Incidente::class, 'Id_NivelRiesgo' , 'id');
    }

}
