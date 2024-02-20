<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/about-me', [AboutMeController::class, 'index'])->name('about');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');


Route::redirect('/', '/about-me');
