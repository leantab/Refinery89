<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DepartmentCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_validate_name(): void
    {
        $this->seed();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/departments/store', [
            'name' => '',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_department_created(): void
    {
        $this->seed();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/departments/store', [
            'name' => 'Department 1',
        ]);

        $response->assertSessionHas('success', 'Department created successfully');

        $this->assertDatabaseHas('departments', [
            'name' => 'Department 1',
        ]);
    }
}
