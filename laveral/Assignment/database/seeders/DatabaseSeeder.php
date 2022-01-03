<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Major;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(5)->create();
        Major::factory()->create([
            "major" => "Computer Science",
          
            ]);
        Major::factory()->create([
            "major" => "Computer Technology",
         ]);
    }
}
