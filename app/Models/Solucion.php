<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    use HasFactory;

    protected $table = 'solucion';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Fecha',
        'Id_Incidente'
    ];

    public function incidente()
    {
        return $this->belongsTo(Incidente::class, 'Id_Incidente', 'id');
    }
}
