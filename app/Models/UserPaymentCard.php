<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentCard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paymentCardType()
    {
        return $this->belongsTo(PaymentCardType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
