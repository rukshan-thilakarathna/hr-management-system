<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Companies;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 50 companies using the factory
        Companies::factory()->count(50)->create();
    }
}
