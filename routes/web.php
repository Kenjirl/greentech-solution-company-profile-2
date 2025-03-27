<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',         [PageController::class, 'index'])   ->name('index');
Route::get('/about',    [PageController::class, 'about'])   ->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact',  [PageController::class, 'contact']) ->name('contact');
