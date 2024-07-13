<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Travel', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Technology', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Health', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Education', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Food', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fashion', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entertainment', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Science', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hiking', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Travelling', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Art', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Music', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Literature', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Historical', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nature', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Photography', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golf', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fitness', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gaming', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lifestyle', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Movies', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Religion', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pets', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gardening', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Automotive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cooking', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Crafts', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'City Tour', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beach', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cultural', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cruise', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Family ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camping ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Scuba Diving', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fishing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fine Dining', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Educational', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Festival', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Groups', 'created_at' => now(), 'updated_at' => now()],

        ];

        DB::table('categories')->insert($categories);
    }
}
