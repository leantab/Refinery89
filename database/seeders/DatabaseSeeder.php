<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $users = User::factory(20)->create();
        $departments = Department::factory(20)->create();

        $users->each(function ($user) use ($departments) {
            $user->departments()->attach(
                $departments->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
