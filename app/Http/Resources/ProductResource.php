<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed category
 * @property mixed description
 * @method getTranslations(string $string)
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->getTranslations('name'),
            'price' => $this->price,
            'description' => $this->getTranslations('description'),
            'category' => new CategoryResource($this->category),
            'order_quantity' => $this->when(isset($this->order_quantity), $this->order_quantity),
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
