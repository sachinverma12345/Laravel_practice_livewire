<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('home.about');
Route::get('/our-room', [HomeController::class, 'ourRoom'])->name('home.room');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/our-services', [HomeController::class, 'blog'])->name('home.services');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('home.contact');
Route::get('/c', [HomeController::class, 'c'])->name('home.c');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashbaord', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('rooms', RoomController::class);
    Route::resource('users', UserController::class);
});


require __DIR__.'/auth.php';
