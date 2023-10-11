<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Settings extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ["name"];

    public function values()
    {
        return $this->morphMany(Value::class, "valuable");
    }

    public function userSettings()
    {
        return $this->hasMany(UserSetting::class);
    }
}
