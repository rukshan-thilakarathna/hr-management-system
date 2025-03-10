<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    protected $model = \App\Models\Companies::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->companyEmail,
            'phone1' => $this->faker->unique()->phoneNumber,
            'phone2' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
            'logo' => $this->faker->imageUrl(200, 200, 'business', true, 'logo'),
            'website' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'fax' => $this->faker->phoneNumber,
            'tax_number' => $this->faker->numerify('TAX-####'),
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'status' => $this->faker->randomElement([0, 1]), // 0 for inactive, 1 for active
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
