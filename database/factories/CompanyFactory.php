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
            // 'logo' => 'https://picsum.photos/100/?random',
            'logo' => fake()->image('public/storage', 100, 100, null, 'https://picsum.photos/200/?random'),
            'website' => fake()->url()
        ];
    }
}
