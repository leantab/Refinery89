<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateUserTast extends TestCase
{
    use RefreshDatabase;

    public function test_validation_errors(): void
    {
        $this->seed();

        $user = User::find(1);
        $response = $this->actingAs($user)->post('/users/store', [
            'name' => '',
            'email' => ''
        ]);
        
        $response->assertSessionHasErrors(['name', 'email']);
    }
}
