<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@delicious.com',
            'password' => 'password'
        ]);


        $categories = ['Dishes', 'Snacks', 'Meal', 'Family', 'Kids'];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category,
                'slug' => Str::slug($category, '-')
            ]);
        }


        \App\Models\Recipe::factory(20)->create();
        \App\Models\Comment::factory(100)->create();
    }
}
