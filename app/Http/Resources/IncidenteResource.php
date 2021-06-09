<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncidenteResource extends JsonResource
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
            'Fecha_Inicio' => $this->Fecha_Inicio,
            'Fecha_Fin' => $this-> Fecha_Fin,
            'Descripcion' => $this-> Descripcion,
            'Respuesta' => $this-> Respuesta,
            'Archivo' => $this-> Archivo,
            'Id_Servicio' => $this-> Id_Servicio,
            'Id_TipoIncidente' => $this-> Id_TipoIncidente,
            'Id_Canal' => $this-> Id_Canal,
            'Id_NivelRiesgo' => $this-> Id_NivelRiesgo,
            'Id_Status' => $this-> Id_Status,
            'Id_UsuarioCliente' => $this-> Id_UsuarioCliente,
            'Id_UsuarioSoporte' => $this-> Id_UsuarioSoporte
        ];
    }
}
