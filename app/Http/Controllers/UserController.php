<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $userId = $request->query('userId');
        return view('database.user', compact('users', 'userId'));
    }


    public function create()
    {
        return view('database.createuser');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required | max:20',
            'email' => 'required | max:100 | regex:/^.+@.+$/i',
            'phone' => 'required | max:20 | min:11',
            'avatar' => 'active_url',
            'student_id' => 'required | max:30',
        ]);

        User::create($data);
        return redirect()->route('user.index')->with('success', 'User added successfully!');
    }

    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'name' => 'required | max:20',
            'email' => 'required | max:100 | regex:/^.+@.+$/i',
            'phone' => 'required | max:20 | min:11',
            'avatar' => 'active_url',
            'student_id' => 'required | max:30',
        ]);
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User info updated successfully!');

    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User has been deleted successfully!');
    }
}
