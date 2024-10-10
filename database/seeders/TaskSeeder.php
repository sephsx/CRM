<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userCount = User::count();
        $projectCount = Project::count();
        $clientCount = Client::count();

        Task::factory()->count(50)
            ->create([
                'assigned_user' => function () use ($userCount) {
                    return rand(1, $userCount);
                },
                'project_id' => function () use ($projectCount) {
                    return rand(1, $projectCount);
                },
                'client_id' => function () use ($clientCount) {
                    return rand(1, $clientCount);
                },
            ]);
    }
}
