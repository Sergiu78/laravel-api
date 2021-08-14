<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlantResource extends JsonResource
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
            'plant' => $this->plant,
            'description' => $this->description,
            'countries' => CountryResource::collection($this->countries),
            'family' => FamilyResource::collection($this->families),
        ];
    }
}
