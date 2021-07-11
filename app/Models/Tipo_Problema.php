<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Problema extends Model
{
    use HasFactory;

    protected $table = 'tipo_problema';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function incidentes()
    {
        return $this->hasMany(Incidente::class, 'id_problema' , 'id');
    }
}
