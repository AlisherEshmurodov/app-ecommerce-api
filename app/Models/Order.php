<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "user_id",
        "delivery_method_id",
        "payment_type_id",
        "status_id",
        "address",
        "total_sum",
        "comments",
        "products",
    ];

    protected $casts = [
        'products' => 'array',
        'address' => 'array',
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

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}
