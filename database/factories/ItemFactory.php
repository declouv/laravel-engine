<?php

namespace Database\Factories;

use App\Models\Badge;
use App\Models\Board;
use App\Models\Label;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'board_id' => rand(1,Board::count()),
            'title' => fake()->unique()->realTextBetween(10,15,1),
            'comments' => rand(1,10),
            'badge_id'=>rand(1,Badge::count()),
            'due_date' => fake()->date(),
            'attachments' => rand(1,10),
        ];
    }
}
