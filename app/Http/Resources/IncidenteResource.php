<?php

namespace App\Http\Resources;

use DateTime;
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
            'Fecha_Inicio' => date('d M Y H:i:s' , strtotime($this->created_at)),
            'Fecha_Fin' => date('d M Y H:i:s' , strtotime($this->updated_at)),
            'Descripcion' => $this-> Descripcion,
            'Respuesta' => $this-> Respuesta,
            'Archivo' => $this-> Archivo,
            'Servicio' => $this-> servicio,
            'Tipo_Incidente' => $this-> tipo_incidente,
            'Canal' => $this-> canal,
            'Nivel_Riesgo' => $this-> nivel_riesgo,
            'Status' => $this-> status,
            'Usuario_Cliente' => $this-> usuario_cliente,
            'Usuario_Soporte' => $this-> usuario_soporte,
            'Tipo_Problema' => $this-> tipo_problema,
            'Solucion' => $this-> solucion
        ];
    }
}
