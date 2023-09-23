<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static cursorPaginate(int $int)
 */
class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description"
    ];

    public $translatable = ["name", "description"];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
