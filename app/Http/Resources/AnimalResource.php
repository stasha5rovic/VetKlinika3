<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{

    public static $wrap = "animal";

    public function toArray(Request $request)
    {
        return [
            'id'=> $this->resource->id,
            'animalType'=> $this->resource->animalType,
            'animalName'=> $this->resource->animalName,
        ];
    }
}
