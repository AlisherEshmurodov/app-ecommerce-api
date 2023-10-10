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
        "name",
    ];

    public $translatable = ['name'];

    public function valuable()
    {
        return $this->morphTo();
    }
}
