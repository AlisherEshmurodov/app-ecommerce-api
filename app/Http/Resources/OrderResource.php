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
            "user" => new UserResource($this->user),
            "delivery_method" => new DeliveryMethodResource($this->deliveryMethod),
            "payment_type" => new PaymentTypeResource($this->paymentType),
            "status" => $this->status,
            "address" => $this->address,
            "total_sum" => $this->total_sum,
            "comments" => $this->comments,
            "products" => $this->products
        ];
    }
}
