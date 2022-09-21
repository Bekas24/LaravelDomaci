<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudioResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return
       [
        'Id'=>$this->resource->id,
        'Naziv_studija'=>$this->resource->naziv_studija,
        'Lokacija'=>$this->resource->lokacija,
        'Grad'=>$this->resource->grad,
        'Broj clanova'=>$this->resource->broj_clanova
    ];
    }
}
