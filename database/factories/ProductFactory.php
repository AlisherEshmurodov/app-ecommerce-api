<?php

namespace Database\Factories;
//use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker = \Faker\Factory::create('ru_RU');

        return [
            "category_id" => rand(1, 4),
            "name" => [
                "eng" => fake()->sentence(3),
                "ru" => "Комплекты спальной мебели"
            ],
            "price" => rand(100000, 1000000),
            "description" => [
                "eng" => fake()->paragraph(5),
                "ru" => "Матрасы. Беспружинные матрасы отличаются лёгкостью и долгим сроком службы.
                При выборе пружинного матраса рекомендуется отдавать предпочтение вариантам с независимыми друг от друга пружинами."
            ]
        ];
    }
}
