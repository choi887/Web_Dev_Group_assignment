<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insert([
            "role_name" => "User",
            "created_at" => now(),
        ]);

        DB::table("roles")->insert([
            "role_name" => "Admin",
            "created_at" => now(),


        ]);
        DB::table("roles")->insert([
            "role_name" => "Planner",
            "created_at" => now(),
        ]);
    }
}
