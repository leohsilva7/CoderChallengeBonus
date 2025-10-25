<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SightingLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'log_id' => $this->id,
            'sighted_at' => $this->sighted_at->toIso8601String(),

            'pato' => new PrimordialDuckResource($this->whenLoaded('primordialDuck')),

            'drone' => [
                'serial_number' => $this->whenLoaded('surveyDrone', $this->surveyDrone?->serial_number),
                'brand' => $this->whenLoaded('surveyDrone', $this->surveyDrone?->brand),
            ],
        ];
    }
}
