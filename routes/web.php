<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login', App\Http\Livewire\Auth\Login::class)->name('login');
Route::get('/register', App\Http\Livewire\Auth\Register::class)->name('register');
Route::get('/logout', App\Http\Livewire\Auth\Logout::class)->name('logout');
Route::get('/forgot-password', App\Http\Livewire\Auth\ForgotPassword::class)->name('forgot-password');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', App\Http\Livewire\Dashboard::class)->name('dashboard');
});
