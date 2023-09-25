<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::create([
            "name" => [
                "eng" => "cash",
                "ru" => "наличные"
            ]
        ]);

        PaymentType::create([
            "name" => [
                "eng" => "terminal",
                "ru" => "Терминал"
            ]
        ]);

        PaymentType::create([
            "name" => [
                "eng" => "click",
                "ru" => "click"
            ]
        ]);

        PaymentType::create([
            "name" => [
                "eng" => "paye",
                "ru" => "payme"
            ]
        ]);

        PaymentType::create([
            "name" => [
                "eng" => "uzum",
                "ru" => "uzum"
            ]
        ]);
    }
}
