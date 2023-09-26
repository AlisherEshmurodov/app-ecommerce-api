<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "comments",
        "delivery_method_id",
        "payment_type_id",
        "total_sum",
        "address_id",
        "products",
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function deliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class);
    }

}