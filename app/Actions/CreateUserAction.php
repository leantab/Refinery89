<?php

namespace App\Actions;

use App\Data\CreateUserData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function __invoke(CreateUserData $data)
    {
        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password) ?? null,
        ]);

        if (count($data->departments) > 0) {
            foreach ($data->departments as $department_id) {
                $user->departments()->attach($department_id);
            }
        }

        return $user;
    }
}