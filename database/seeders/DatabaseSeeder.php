<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();

        for ($p = 0; $p < 50; $p++) {
            DB::table('languages')->insert([
                'title' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('projects')->insert([
                'title' => Str::random(10).$p,
                'picture' => "public/projects/xeIJvYU9C7oYWgizNdTV6j88h7iAn3HeQFJm4wu9.jpg",
                'description' => Str::random(30),
                'active' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);


        }

        for ($p = 0; $p < 50; $p++) {
            DB::table('project_languages')->insert([
                'project_id' => rand(1, 50),
                'language_id' => rand(1, 50),
            ]);
        }
    }
}
