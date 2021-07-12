<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    use HasFactory;

    protected $table = 'configuraciones';

    protected $primaryKey = 'id';

    protected $fillable = [
        'configuracion',
        'id_inventario'
    ];

    public function inventario()
    {
        return $this->belongsTo(Inventario::class, 'id_inventario', 'id');
    }
}
