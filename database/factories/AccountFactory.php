<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
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
        // 'email' => fake()->unique()->safeEmail(),
        'role' => fake()->randomElement(['admin', 'author', 'editor', 'maintainer', 'subscriber', 'member']),
        'plan' => fake()->randomElement(['basic', 'company', 'enterprise', 'team']),
        'active_plan' => fake()->optional()->dateTimeBetween(now(), '2028-12-31'),
        'billing' => fake()->randomElement(['auto-debit', 'manual-cash', 'manual-paypal', 'manual-credit']),
        'status' => fake()->randomElement(['active', 'pending', 'inactive']),
        'contact' => fake()->phoneNumber(),
        'country' => fake()->country(),
        'order' => fake()->optional()->numberBetween(1,200),
        'total_spent' => fake()->optional()->numberBetween(1,200),
        'balance' => fake()->optional()->numberBetween(1,2000),
        'address' => fake()->address(),
        ];
    }
}
// $table->string('name');
// $table->string('username')->unique();
// $table->string('email')->unique();
// $table->string('role')->nullable();
// $table->string('plan')->nullable();
// $table->date('active_plan')->nullable();
// $table->string('billing')->nullable();
// $table->string('status')->nullable();
// $table->integer('contact');
// $table->string('country');
// $table->string('language');
// $table->integer('order')->nullable();
// $table->integer('total_spent')->nullable();
// $table->integer('balance')->nullable();
// $table->string('address');
// $table->timestamps();
