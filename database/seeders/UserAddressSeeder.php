<?php

namespace Database\Seeders;

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserAddress::create([
            "user_id" => 2,
            "latitude" => "51.277114",
            "longitude" => "79.245405",
            "region" => "Tashkent",
            "district" => "Yakkasaroy District",
            "street" => "Qushbegi",
            "home" => "10/3"
        ]);

        UserAddress::create([
            "user_id" => 2,
            "latitude" => "41.277114",
            "longitude" => "69.245405",
            "region" => "Tashkent",
            "district" => "Yakkasaroy District",
            "street" => "Muqimi",
            "home" => "25/3"
        ]);

        UserAddress::factory()->count(8)->create();
    }
}
