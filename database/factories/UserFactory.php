<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = fake()->name(),
            'username' => str_replace(' ', '', strtolower($name)),
            'email' => str_replace(' ', '', strtolower($name)) . '@woila.com',
            'email_verified_at' => now(),
            // 'password' => bcrypt('password'),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),

            'as' => fake()->randomElement(['admin', 'author', 'editor', 'maintainer', 'subscriber', 'member']),
            'plan' => fake()->randomElement(['basic', 'company', 'enterprise', 'team']),
            'active_plan' => fake()->optional()->dateTimeBetween(now(), '2028-12-31'),
            'billing' => fake()->randomElement(['auto-debit', 'manual-cash', 'manual-paypal', 'manual-credit']),
            'status' => fake()->randomElement(['active', 'pending', 'inactive']),
            'contact' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'order' => fake()->optional()->numberBetween(1, 200),
            'total_spent' => fake()->optional()->numberBetween(1, 200),
            'balance' => fake()->optional()->numberBetween(1, 2000),
            'address' => fake()->address(),
            'img' => rand(1, 20) . '.png',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
