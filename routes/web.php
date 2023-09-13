<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Newly Created Controllers Go Here
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModeratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// If User is logged in dashboard is default else welcome.php
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    } else {
        return view('welcome');
    }
});

Route::get('/dashboard', function () {
    if (auth()->user()->role == "admin") {
        return redirect()->route('admin.dashboard');
    } elseif(auth()->user()->role == "moderator") {
        return redirect()->route('moderator.dashboard');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// To prevent ordinary users from accessing admin/mod dashboards using URL
Route::middleware(['auth','role:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/control', [AdminController::class, 'AdminDashboard'])->name('admin.control');
});

Route::middleware(['auth','role:moderator'])->group(function() {
    Route::get('/moderator/dashboard', [ModeratorController::class, 'ModeratorDashboard'])->name('moderator.dashboard');
});