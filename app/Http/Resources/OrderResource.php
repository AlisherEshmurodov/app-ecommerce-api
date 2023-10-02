<?php

namespace App\Http\Resources;

use App\Models\DeliveryMethod;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "user" => $this->user,
            "delivery_method_id" => new DeliveryMethodResource(DeliveryMethod::find($this->delivery_method_id)),
            "payment_type_id" => new PaymentTypeResource(PaymentType::find($this->payment_type_id)),
            "address" => $this->address,
            "total_sum" => $this->total_sum,
            "comments" => $this->comments,
            "products" => $this->products,
        ];
    }
}
