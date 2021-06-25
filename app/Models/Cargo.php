<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    public function usuarios_soporte()
    {
        return $this->hasMany(Usuario_Soporte::class, 'Id_Cargo' , 'id');
    }


}
