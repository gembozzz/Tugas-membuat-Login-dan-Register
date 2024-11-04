<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan form registrasi
Route::get('/register', function () {
    return view('register');
});

// Route untuk menampilkan form login
Route::get('/login', function () {
    return view('login');
});

// Route untuk menampilkan dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

