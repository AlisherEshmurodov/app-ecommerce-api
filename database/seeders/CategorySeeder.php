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
        $category = Category::create([
            "name" => [
                "eng" => "chair",
                "ru" => "стул"
            ]
        ]);

        $category->childCategories()->create([
            "name" => [
                "eng" => "office",
                "ru" => "office"
            ]
        ]);

        $childCategory = $category->childCategories()->create([
            "name" => [
                "eng" => "gaming",
                "ru" => "gaming"
            ]
        ]);


        $childCategory->childCategories()->create([
            "name" => [
                "eng" => "rgb",
                "ru" => "rgb"
            ]
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                "eng" => "pc",
                "ru" => "pc"
            ]
        ]);




        $category = Category::create([
            "name" => [
                "eng" => "table",
                "ru" => "стол"
            ]
        ]);

        $category->childCategories()->create([
            "name" => [
                "eng" => "office",
                "ru" => "office"
            ]
        ]);


        $childCategory = $category->childCategories()->create([
            "name" => [
                "eng" => "billiard",
                "ru" => "billiard"
            ]
        ]);


        $childCategory->childCategories()->create([
            "name" => [
                "eng" => "snooker",
                "ru" => "snooker"
            ]
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                "eng" => "blackpool",
                "ru" => "blackpool"
            ]
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                "eng" => "russian",
                "ru" => "russian"
            ]
        ]);



        $category->childCategories()->create([
            "name" => [
                "eng" => "tennis",
                "ru" => "tennis"
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
