<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UciteljResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'Id'=>$this->resource->id,
            'Ime'=>$this->resource->ime,
            'Prezime'=>$this->resource->prezime,
            'Radno iskustvo'=>$this->resource->radno_iskustvo,
            'Primanja'=>$this->resource->primanja,
            'Studio'=>new StudioResurs ($this->resource->studio)

        ];
    }
}
