<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'email' => fake()->companyEmail(),
            // 'logo' => 'https://picsum.photos/100/100?random=' . rand(1, 100000),
            // 'logo' => fake()->image('public/app/storage/', 100, 100, null, 'https://picsum.photos/200/?random=1'),
            'logo' => fake()->image('storage/app/public', 100, 100, null, false),
            // 'logo' => $this->faker->image(storage_path('\app\public'), 100, 100, null, false),
            // 'logo' => fake()->imageUrl(),
            'website' => fake()->url()
        ];
    }
}
