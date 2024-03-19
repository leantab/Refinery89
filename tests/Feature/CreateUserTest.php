<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateUserTest extends TestCase
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

        dd($response->getContent());
        
        $response->assertSessionHasErrors(['name', 'email']);
    }

    public function test_user_created(): void
    {
        $this->seed();

        $user = User::find(1);
        // $response = $this->actingAs($user)->post('/users/store', [
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@example.com',
        //     'password' => Hash::make('password'),
        //     'departments' => [1,2],
        // ]);

        // $response->assertSessionHas('success', 'User created successfully');

        // $this->assertDatabaseHas('users', [
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@example.com'
        // ]);
    }
}
