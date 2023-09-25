<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
            "name" => [
                "eng" => "Free",
                "ru" => "Бесплатно",
            ],
            "estimated_time" => [
                "eng" => "5 days",
                "ru" => "5 дней",
            ],
            "sum" => 0
        ]);

        DeliveryMethod::create([
            "name" => [
                "eng" => "Standart",
                "ru" => "Стандарт",
            ],
            "estimated_time" => [
                "eng" => "3 days",
                "ru" => "3 дней",
            ],
            "sum" => 40000
        ]);

        DeliveryMethod::create([
            "name" => [
                "eng" => "Fast",
                "ru" => "Быстрый",
            ],
            "estimated_time" => [
                "eng" => "1 days",
                "ru" => "1 дней",
            ],
            "sum" => 80000
        ]);
    }
}
