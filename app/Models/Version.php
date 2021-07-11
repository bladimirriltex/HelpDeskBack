<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table = 'version';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'configuracion',
        'id_servicio'
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id');
    }
}
