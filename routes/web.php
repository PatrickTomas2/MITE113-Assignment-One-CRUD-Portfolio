<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfomationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', [App\Http\Controllers\PersonalInfomationController::class, 'index'])->name('portfolio.index');

Route::get('/portfolio/personal-information/create', [App\Http\Controllers\PersonalInfomationController::class, 'create'])->name('portfolio.personal-information.create');
Route::post('/portfolio/personal-information', [App\Http\Controllers\PersonalInfomationController::class, 'store'])->name('portfolio.personal-information.store');

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

