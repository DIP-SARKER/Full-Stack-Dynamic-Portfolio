<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Main layout demo
Route::get('/db', function () {
    $users = DB::table('users')->get();
    return view('db', compact('users'));
})->name('db');


// Store new user
Route::post('/users', function (Request $request) {
    DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'avatar' => $request->avatar ?: 'https://images.vexels.com/media/users/3/140384/isolated/svg/fa2513b856a0c96691ae3c5c39629f31.svg',
        'student_id' => $request->student_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('users.index')->with('success', 'User added successfully!');
})->name('users.store');


// Show users
Route::get('/users', function () {
    $users = DB::table('users')->get(); 
    return view('users', compact('users'));
})->name('users.index');




Route::get('/personal-details', function () {
    $details = DB::table('personal_details')->get();
    return view('personal_details', compact('details'));
})->name('personal.details');


// Show skills
Route::get('/skills', function () {
    $skills = DB::table('skills')->get();
    return view('skills', compact('skills'));
})->name('skills.index');

Route::get('/educations', function () {
    $educations = DB::table('educations')->get();
    return view('educations', compact('educations'));
})->name('educations.index');

Route::get('/projects', function () {
    $projects = DB::table('projects')->get();
    return view('projects', compact('projects'));
})->name('projects.index');

Route::get('/achievements', function () {
    $achievements = DB::table('achievements')->get();
    return view('achievements', compact('achievements'));
})->name('achievements.index');

Route::get('/experiences', function () {
    $experiences = DB::table('experiences')->get();
    return view('experiences', compact('experiences'));
})->name('experiences.index');