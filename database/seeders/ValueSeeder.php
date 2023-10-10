<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            "name" => [
                "eng" => "red",
                "ru" => "красный",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                "eng" => "black",
                "ru" => "черный",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                "eng" => "brown",
                "ru" => "коричневый",
            ]
        ]);

        $attribute2 = Attribute::find(2);

        $attribute2->values()->create([
            "name" => [
                "eng" => "MDF",
                "ru" => "МДФ",
            ]
        ]);

        $attribute2->values()->create([
            "name" => [
                "eng" => "LDSP",
                "ru" => "ЛДСП",
            ]
        ]);

    }
}
