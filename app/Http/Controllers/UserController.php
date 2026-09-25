<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Portfolio.Users.index', [
            'users' => User::with('profile')->withCount(['skills', 'projects', 'education'])->get(),
        ]);
    }

    public function create()
    {
        return view('Portfolio.Users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create($validatedData);

        return redirect()->route('portfolio.users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        $user->load(['profile', 'skills', 'projects', 'education']);

        return view('Portfolio.Users.show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('Portfolio.Users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (empty($validatedData['password'])) {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('portfolio.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('portfolio.users.index')->with('success', 'User deleted successfully.');
    }
}
