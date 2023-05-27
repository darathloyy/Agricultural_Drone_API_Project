<?php

namespace App\Http\Resources;

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'date'=>$this->date,
            'time' => $this->time,
            'area' => $this->area,
            'density'=>$this->density,
            'instructions' => InstructionResource::collection($this->instructions)
            
        ];
    }
}
