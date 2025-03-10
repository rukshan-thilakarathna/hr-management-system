<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Employees;
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
        // Create 10 users (if needed)
        User::factory(10)->create();

        // Seed companies
        $this->call([
            CompaniesSeeder::class,
            EmployeesSeeder::class
        ]);
    }
}
