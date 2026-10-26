<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', fn (): View => view('welcome'));
Route::get('/', HomeController::class)->name('home');
