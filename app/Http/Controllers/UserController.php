<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();

        return view('users_create', [
            'departments' => $departments,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if (isset($request->departments ) && $request->departments != null) {
            foreach ($request->departments as $department_id) {
                $user->departments()->attach($department_id);
            }
        }

        return redirect()->route('users');
    }

    public function show(User $user)
    {
        return view('users_show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
