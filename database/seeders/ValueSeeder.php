<?php

namespace Database\Seeders;

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
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "red",
                "ru" => "красный",
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "black",
                "ru" => "черный",
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "brown",
                "ru" => "коричневый",
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "eng" => "MDF",
                "ru" => "МДФ",
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "eng" => "LDSP",
                "ru" => "ЛДСП",
            ]
        ]);

    }
}
