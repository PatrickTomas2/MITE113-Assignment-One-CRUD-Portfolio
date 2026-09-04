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
