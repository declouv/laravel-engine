<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>['electronics', 'clothes', 'home', 'garden', 'sports', 'outdoor', 'health', 'beauty', 'baby'],
            'icon'=>['laptop-mobile','clothes-hanger','house-heart','bag-seedling','tennis-ball','campfire','notes-medical','lips','baby-carriage'],
            'description'=>fake()->paragraph(),
        ];
    }
}
