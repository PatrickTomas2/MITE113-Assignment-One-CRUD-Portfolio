<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfomationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', [App\Http\Controllers\PersonalInfomationController::class, 'index'])->name('portfolio.index');

Route::get('/portfolio/personal-information/create', [App\Http\Controllers\PersonalInfomationController::class, 'create'])->name('portfolio.personal-information.create');
Route::post('/portfolio/personal-information', [App\Http\Controllers\PersonalInfomationController::class, 'store'])->name('portfolio.personal-information.store');
