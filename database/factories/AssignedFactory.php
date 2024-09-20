<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assigned>
 */
class AssignedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id'=>fake()->numberBetween(1, Item::count()),
            'assigned'=>fake()->numberBetween(1,10).".png"
        ];
    }
}
