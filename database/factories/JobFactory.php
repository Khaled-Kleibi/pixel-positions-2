<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['10000', '20000', '30000', '400000']),
            'location' => fake()->randomElement(['Remote', 'Riyadh', 'Jeddah', 'Jazan']),
            'schedule' => fake()->randomElement(['Hybrid', 'Part Time', 'Full Time']),
            'url' => fake()->url,
            'featured' => false,
        
        ];
    }
}
