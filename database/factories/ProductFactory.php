<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
        'name' => fake()->unique()->word(),
        'price' => fake()->numberBetween(1, 100),
        'discount' => fake()->numberBetween(0, 50),
        'qty' => fake()->numberBetween(1, 100),
        'sku' => fake()->numberBetween(1000, 9999),
        // 'img' => fake()->imageUrl,
        'category_id'=>rand(1,count(Category::all())),
        'company'=>fake()->company(),
        'description' => fake()->paragraph(),
        'status' => fake()->randomElement(['active', 'inactive','pending']),
        ];
    }
}
