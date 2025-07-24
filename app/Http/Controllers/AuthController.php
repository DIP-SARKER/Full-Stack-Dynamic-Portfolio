<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required | min:8',
    ]);

    if (Auth::attempt($credentials)) {
        echo "<h1>Successful.</h1>";
    } else {
        echo "<h1>Failed.</h1>";
    }
}

public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required  | min:11',
        'student_id' => 'required',
        'password' => 'required | min:8',
    ]);


    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        "phone"=> $validatedData['phone'],
        'student_id' => $validatedData['student_id'],
        'avatar' => $request->avatar??'https://cdn.prod.website-files.com/62d84e447b4f9e7263d31e94/6399a4d27711a5ad2c9bf5cd_ben-sweet-2LowviVHZ-E-unsplash-1.jpeg',
        'password' => bcrypt($validatedData['password']),
    ]);

    if ($user) {
        echo "<h1>Registration Successful.</h1>";
        return redirect()->route('user.index')->with('success', 'User added successfully!');
    } else {
        echo "<h1>Registration Failed.</h1>";
    }
}

}
