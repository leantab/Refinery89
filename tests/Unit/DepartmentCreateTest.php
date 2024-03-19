<?php

namespace Tests\Unit;

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
}
