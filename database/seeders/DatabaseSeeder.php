<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Group;
use App\Models\Guardian;
use App\Models\Student;
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
        Guardian::factory(100)->create();
        Student::factory(100)->create();
        Group::factory(100)->create();
        Enrollment::factory(100)->create();
    }
}
