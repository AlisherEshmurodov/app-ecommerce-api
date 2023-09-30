<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryMethodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "tarif" => $this->getTranslations("name"),
            "yetkazib_berish_vaqti" => $this->getTranslations("estimated_time"),
            "sum" => $this->sum,
        ];
    }
}