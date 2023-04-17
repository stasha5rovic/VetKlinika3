<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public static $wrap = "user";


    public function toArray(Request $request)
    {
        return [
            'id'=> $this->resource->id,
            'name'=> $this->resource->name,
            'type'=> $this->resource->type,
        ] ;
    }
}
