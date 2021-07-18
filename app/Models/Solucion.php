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
    ];

    public function incidentes()
    {
        return $this->hasMany(Incidente::class, 'id_solucion', 'id');
    }
}
