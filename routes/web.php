<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Personal_detail_Controller;
use App\Http\Controllers\Skills_Controller;
use App\Http\Controllers\Education_Controller;
use App\Http\Controllers\Project_Controller;
use App\Http\Controllers\Experience_Controller;
use App\Http\Controllers\Achievement_Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
//Login
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name("user.login");


Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthController::class, 'register'])->name("user.register");


Route::get('/main', function () {
    return view('main');
});

//dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashBoardController::class, 'index'])->name("admin.dashboard");
} );

// Main layout demo
Route::get('/', function () {
    return view('db');
});

// User data
Route::get('/user', [UserController::class, 'index'])->name("user.index");

Route::get('/user/create', [UserController::class, 'create'])->name("user.create");

Route::post('/user', [UserController::class, 'store'])->name("user.store");


Route::put('/user/{user}/update', [UserController::class, 'update'])->name("user.update");

Route::delete('/user/{user}/delete', [UserController::class, 'delete'])->name("user.delete");


//Personal details
Route::get('/personal_detail', [Personal_detail_Controller::class, 'index'])->name("personal_detail.index");

Route::get('/personal_detail/create', [Personal_detail_Controller::class, 'create'])->name("personal_detail.create");

Route::post('/personal_detail', [Personal_detail_Controller::class, 'store'])->name("personal_detail.store");

Route::get('/personal_detail/{p_detail}/edit', [Personal_detail_Controller::class, 'edit'])->name("personal_detail.edit");

Route::put('/personal_detail/{p_detail}/update', [Personal_detail_Controller::class, 'update'])->name("personal_detail.update");

Route::delete('/personal_detail/{p_detail}/delete', [Personal_detail_Controller::class, 'delete'])->name("personal_detail.delete");




// Skills
Route::get('/skill', [Skills_Controller::class, 'index'])->name("skill.index");

Route::get('/skill/create', [Skills_Controller::class, 'create'])->name("skill.create");

Route::post('/skill', [Skills_Controller::class, 'store'])->name("skill.store");

Route::get('/skill/{skill}/edit', [Skills_Controller::class, 'edit'])->name("skill.edit");

Route::put('/skill/{skill}/update', [Skills_Controller::class, 'update'])->name("skill.update");

Route::delete('/skill/{skill}/delete', [Skills_Controller::class, 'delete'])->name("skill.delete");


// Educations
Route::get('/education', [Education_Controller::class, 'index'])->name("education.index");

Route::get('/education/create', [Education_Controller::class, 'create'])->name("education.create");

Route::post('/education', [Education_Controller::class, 'store'])->name("education.store");

Route::get('/education/{education}/edit', [Education_Controller::class, 'edit'])->name("education.edit");

Route::put('/education/{education}/update', [Education_Controller::class, 'update'])->name("education.update");

Route::delete('/education/{education}/delete', [Education_Controller::class, 'delete'])->name("education.delete");

// Projectss
Route::get('/project', [Project_Controller::class, 'index'])->name("project.index");

Route::get('/project/create', [Project_Controller::class, 'create'])->name("project.create");

Route::post('/project', [Project_Controller::class, 'store'])->name("project.store");

Route::get('/project/{project}/edit', [Project_Controller::class, 'edit'])->name("project.edit");

Route::put('/project/{project}/update', [Project_Controller::class, 'update'])->name("project.update");

Route::delete('/project/{project}/delete', [Project_Controller::class, 'delete'])->name("project.delete");

// Experiences
Route::get('/experience', [Experience_Controller::class, 'index'])->name('experience.index');

Route::get('/experience/create', [Experience_Controller::class, 'create'])->name('experience.create');

Route::post('/experience', [Experience_Controller::class, 'store'])->name('experience.store');

Route::get('/experience/{experience}/edit', [Experience_Controller::class, 'edit'])->name('experience.edit');

Route::put('/experience/{experience}/update', [Experience_Controller::class, 'update'])->name('experience.update');

Route::delete('/experience/{experience}/delete', [Experience_Controller::class, 'delete'])->name('experience.delete');


// Achievements
Route::get('/achievement', [Achievement_Controller::class, 'index'])->name('achievement.index');

Route::get('/achievement/create', [Achievement_Controller::class, 'create'])->name('achievement.create');

Route::post('/achievement', [Achievement_Controller::class, 'store'])->name('achievement.store');

Route::get('/achievement/{achievement}/edit', [Achievement_Controller::class, 'edit'])->name('achievement.edit');

Route::put('/achievement/{achievement}/update', [Achievement_Controller::class, 'update'])->name('achievement.update');

Route::delete('/achievement/{achievement}/delete', [Achievement_Controller::class, 'delete'])->name('achievement.delete');
