<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this->uuid,
            'slug' => $this->slug,
            'name' => $this->name,
            'description' => $this->description,
            'date' => optional($this->created_at)->format('Y-m-d'),
        ];
    }
}
