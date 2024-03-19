<?php

namespace App\Data;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class CreateUserData extends Data
{
    public string $name;
    public string $email;
    public ?string $password;
    public array $departments;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? null,
            'departments' => $request->departments ?? [],
        ]);
    }
}