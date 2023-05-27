<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DroneLocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'model' => $this->model,
            'battery'=>$this->battery,
            'manufacturer'=>$this->manufacturer,
            'price'=>$this->price,
            'type_drone_id'=>$this->type_drone_id,
            'location_id'=>$this->location_id,
            'location' =>new LocationResource($this->location)
        ];
    }
}
