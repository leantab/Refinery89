<?php

namespace Tests\Unit;

use App\Actions\CreateUserAction;
use App\Data\CreateUserData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateUserTast extends TestCase
{
    use RefreshDatabase;

    public function __construct(
        private CreateUserAction $createUserAction)
    {
    }

    public function test_user_created(): void
    {
        $user = $this->createUserAction->__invoke(
            CreateUserData::from([
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => 'password',
                'departments' => [1,2],
            ])
        );

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ]);
    }
}
