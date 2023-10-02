<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => rand(2,9),
            "latitude" => "51.277114",
            "longitude" => "79.245405",
            "region" => "Tashkent",
            "district" => "Yakkasaroy District",
            "street" => "Qushbegi",
            "home" => "10/3"
        ];
    }
}
