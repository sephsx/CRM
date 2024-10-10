<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),            // Generates a random sentence for the title
            'description' => fake()->sentence(),      // Generates a random sentence for the description
            'deadline' => now(),                      // Gets the current timestamp
            'assigned_user' => rand(1, 100),          // Random user ID (ensure this range matches your users)
            'status' => Str::random(10),              // Generates a random string of length 10 for the status
            'project_id' => rand(1, 100),             // Random project ID (ensure this range matches your projects)
            'client_id' => rand(1, 100),
        ];
    }
}
