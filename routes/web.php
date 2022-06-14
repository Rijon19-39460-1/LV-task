<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


Route::get('/neehal',[homeController::class, 'neehal'])->name('home');
Route::get('/rijon',[homeController::class, 'rijon'])->name('product');