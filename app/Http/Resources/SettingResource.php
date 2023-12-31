<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "setting_id" => $this->id,
            "name" => $this->getTranslations('name'),
            "type" => $this->type,
            "value" => ValueResource::collection($this->values)
        ];
    }
}
