<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static find($attribute_id)
 */
class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function values()
    {
        return $this->hasMany(Value::class);
    }
}
