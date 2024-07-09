<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LodgingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("lodgings")->insert([
            'name' => "none",
            'address' => "-",
            'city' => "-",
            'state' => "-",
            'zip_code' => "-",
            'phone_number' => "-",
            'email' => "-",
            'description' => "-",
            "created_at" => now(),
        ]);
    }
}
