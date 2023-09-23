<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static create(array $array)
 * @method static find($value_id)
 */
class Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        "attribute_id",
        "name",
    ];

    public $translatable = ['name'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
