<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanResurs extends JsonResource
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
            'Sifra'=>$this->resource->sifra,
            'Ime'=>$this->resource->ime,
            'Prezime'=>$this->resource->prezime,
            'Godine'=>$this->resource->godine,
            'Adresa'=>$this->resource->adresa,
            'Ucitelj'=> new UciteljResurs($this->resource->ucitelj)

        ];
    }
}
