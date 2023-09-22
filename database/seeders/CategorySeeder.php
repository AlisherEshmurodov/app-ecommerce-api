<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => [
                "eng" => "chair",
                "ru" => "стул"
            ]
        ]);

        Category::create([
            "name" => [
                "eng" => "table",
                "ru" => "стол"
            ]
        ]);

        Category::create([
            "name" => [
                "eng" => "armchair",
                "ru" => "кресло"
            ]
        ]);

        Category::create([
            "name" => [
                "eng" => "bed",
                "ru" => "кровать"
            ]
        ]);
    }
}
