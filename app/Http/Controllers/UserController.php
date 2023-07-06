<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::latest()->filter(
                        request(['search'])
                    )->paginate(18)->withQueryString()
        ]);
    }

    // show details of a specific user
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        auth()->login(User::create($attributes));

        return redirect('/')->with('success', 'The user details have been saved.');
    }
}
