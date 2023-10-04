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
            "delivery_method" => $this->deliveryMethod,
            "payment_type" => $this->paymentType,
            "status" => $this->status,
            "address" => $this->address,
            "total_sum" => $this->total_sum,
            "comments" => $this->comments,
            "products" => $this->products
        ];
    }
}
