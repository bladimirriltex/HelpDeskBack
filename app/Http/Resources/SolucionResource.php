<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SolucionResource extends JsonResource
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
            'Descripcion' => $this->Descripcion,
            'Fecha' => date('d M Y h:m:s' , strtotime($this->created_at)),
            'Incidente' => $this->incidentes,
        ];
    }
}
