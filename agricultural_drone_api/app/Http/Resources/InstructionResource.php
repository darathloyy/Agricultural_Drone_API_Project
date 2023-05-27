<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstructionResource extends JsonResource
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
            'run_mode' => $this->run_mode,
            'status' => $this->status,
            'feedback' => $this->feedback,
            'drone_id' => $this->drone_id,
            'plan_id' => $this->plan_id,
           
        ];
    }
}
