<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCardType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userPaymentCards()
    {
        return $this->hasMany(UserPaymentCard::class);
    }
}
