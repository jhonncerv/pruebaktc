<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccesorioResource extends JsonResource
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
            'nombre' => $this->nombre,
            'sku' => $this->sku,
            'descripcion' => $this->descripcion,
        ];
    }

    public function with($request)
    {
        return [
            'status' => 200,
            'message' => 'Detalle de la ciudad accesorio.'
        ];
    }
}
