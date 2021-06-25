<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    public function incidentes()
    {
        return $this->hasMany(Incidente::class, 'Id_Status' , 'id');
    }
}
