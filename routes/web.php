<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfomationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/portfolio',[App\Http\Controllers\PersonalInfomationController::class, 'index'])->name('portfolio.index');

Route::get('/portfolio/personal-information/create', [App\Http\Controllers\PersonalInfomationController::class, 'create'])->name('portfolio.personal-information.create');
Route::post('/portfolio/personal-information', [App\Http\Controllers\PersonalInfomationController::class, 'store'])->name('portfolio.personal-information.store');
Route::get('/portfolio/personal-information/{personalInformation}/edit', [App\Http\Controllers\PersonalInfomationController::class, 'edit'])->name('portfolio.personal-information.edit');
Route::put('/portfolio/personal-information/{personalInformation}', [App\Http\Controllers\PersonalInfomationController::class, 'update'])->name('portfolio.personal-information.update');
Route::delete('/portfolio/personal-information/{personalInformation}', [App\Http\Controllers\PersonalInfomationController::class, 'destroy'])->name('portfolio.personal-information.destroy');

Route::get('/portfolio/skills/create', [App\Http\Controllers\SkillsController::class, 'create'])->name('portfolio.skills.create');
Route::post('/portfolio/skills', [App\Http\Controllers\SkillsController::class, 'store'])->name('portfolio.skills.store');
Route::get('/portfolio/skills/{skills}/edit', [App\Http\Controllers\SkillsController::class, 'edit'])->name('portfolio.skills.edit');
Route::put('/portfolio/skills/{skills}', [App\Http\Controllers\SkillsController::class, 'update'])->name('portfolio.skills.update');
Route::delete('/portfolio/skills/{skills}', [App\Http\Controllers\SkillsController::class, 'destroy'])->name('portfolio.skills.destroy');

Route::get('/portfolio/projects/create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('portfolio.projects.create');
Route::post('/portfolio/projects', [App\Http\Controllers\ProjectsController::class, 'store'])->name('portfolio.projects.store');
Route::get('/portfolio/projects/{projects}/edit', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('portfolio.projects.edit');
Route::put('/portfolio/projects/{projects}', [App\Http\Controllers\ProjectsController::class, 'update'])->name('portfolio.projects.update');
Route::delete('/portfolio/projects/{projects}', [App\Http\Controllers\ProjectsController::class, 'destroy'])->name('portfolio.projects.destroy');

Route::get('/portfolio/education/create', [App\Http\Controllers\EducationController::class, 'create'])->name('portfolio.educations.create');
Route::post('/portfolio/education', [App\Http\Controllers\EducationController::class, 'store'])->name('portfolio.educations.store');
Route::get('/portfolio/education/{education}/edit', [App\Http\Controllers\EducationController::class, 'edit'])->name('portfolio.educations.edit');
Route::put('/portfolio/education/{education}', [App\Http\Controllers\EducationController::class, 'update'])->name('portfolio.educations.update');
Route::delete('/portfolio/education/{education}', [App\Http\Controllers\EducationController::class, 'destroy'])->name('portfolio.educations.destroy');


Route::get('/portfolio/users', [App\Http\Controllers\UserController::class, 'index'])->name('portfolio.users.index');
Route::get('/portfolio/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('portfolio.users.create');
Route::post('/portfolio/users', [App\Http\Controllers\UserController::class, 'store'])->name('portfolio.users.store');
Route::get('/portfolio/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('portfolio.users.show');
Route::get('/portfolio/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('portfolio.users.edit');
Route::put('/portfolio/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('portfolio.users.update');
Route::delete('/portfolio/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('portfolio.users.destroy');
