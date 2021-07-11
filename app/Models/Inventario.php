<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'nombre_usuario'
    ];

    public function configuraciones()
    {
        return $this->hasMany(Configuraciones::class, 'id_inventario' , 'id');
    }
}
