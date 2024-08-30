<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
        ]);
        User::factory(10)->create();
        Account::factory(10)->create();

        $categories = ['electronics', 'clothes', 'home', 'garden', 'sports', 'outdoor', 'health', 'beauty', 'baby'];
        $icons = ['bxs-devices','bx-closet','bxs-home-heart','bxs-leaf','bxs-cricket-ball','bxs-tree','bxs-heart','bxs-wink-smile','bxs-baby-carriage'];
        $icon_color = ['primary','secondary','success','danger','warning','info','primary','warning','danger'];
        foreach ($categories as $index => $category) {
            Category::factory()->create([
                'name' => $category,
                'icon' => $icons[$index],
                'icon_color' => $icon_color[$index]
            ]);
        }


        Product::factory(20)->create();
    }
}
