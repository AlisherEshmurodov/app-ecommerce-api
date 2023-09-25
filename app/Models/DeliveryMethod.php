<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static create(array $array)
 */
class DeliveryMethod extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ["name", "estimated_time"];

    protected $fillable = [
        "name",
        "estimated_time",
        "sum",
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
