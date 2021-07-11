<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Nombre' => $this->Nombre,
            'Apellidos' => $this->Apellidos,
            'Email' => $this->Email,
            'Rol' => $this->rol,
            'User' => $this->user,
            'Incidentes' => $this->incidentes,
            'Cantidad_Incidentes' => $this->incidentes->count(),
        ];
    }
}
