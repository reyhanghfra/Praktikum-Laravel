<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;
 
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return 'Barokah Mart adalah toko ritel yang menyediakan berbagai kebutuhan harian dengan harga terjangkau dan pelayanan terbaik.';
});