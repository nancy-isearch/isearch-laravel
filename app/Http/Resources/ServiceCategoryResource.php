<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'name' => $this->name,

            'slug' => $this->slug,

            'icon_id' => $this->icon_id,

            'icon' => $this->whenLoaded('icon', function () {
                return [
                    'id' => $this->icon->id,
                    'name' => $this->icon->name,
                    'icon' => $this->icon->icon,
                ];
            }),

            'status' => (bool) $this->status,

            'sort_order' => (int) $this->sort_order,

            'created_at' => optional($this->created_at)
                ->format('Y-m-d H:i:s'),

            'updated_at' => optional($this->updated_at)
                ->format('Y-m-d H:i:s'),
        ];
    }
}