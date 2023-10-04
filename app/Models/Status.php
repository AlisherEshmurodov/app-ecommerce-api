<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Status extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        "name",
        "code",
        "for"
    ];

    public $translatable = [
        "name"
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
