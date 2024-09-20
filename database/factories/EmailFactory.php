<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Email>
 */
class EmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender_id'=>rand(User::first()->id, User::latest()->first()->id),
            'receiver_id'=>rand(User::first()->id, User::latest()->first()->id),
            'subject'=>fake()->word(),
            'messages'=>fake()->paragraph(),
            'is_read'=>fake()->randomElement(['true','false']),
            'is_stared'=>fake()->randomElement(['true','false']),
            'label'=>fake()->randomElement(['Personal','Company','Important','Private']),

        ];
    }
}
