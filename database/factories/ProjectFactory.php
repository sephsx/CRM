<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),         // Generates a fake sentence for the title
            'description' => fake()->sentence(),   // Generates a fake sentence for the description
            'deadline' => Carbon::now()->addDays(rand(1, 365)),                 // Current timestamp using Laravel's now
            'assigned_user' => rand(1, 100),
            'assigned_client' => rand(1, 100),
        ];
    }
}
