<?php

namespace App\Http\Resources;

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use function PHPSTORM_META\map;

class DroneDetailResource extends JsonResource
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
            'type_drone'=>new DroneTypeResource($this->typeDrone),
            'location' =>new LocationResource($this->location),
            'instrutions'=>InstructionResource::collection($this->instructions),
            'maps'=>MapResource::collection($this->maps),

        ];
    }
}
