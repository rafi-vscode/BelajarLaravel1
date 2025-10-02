<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route untuk halaman utama (landing page) Anda
Route::get('/', [AnimeController::class, 'landing'])->name('landing');

// Route untuk halaman daftar anime berdasarkan genre
Route::get('/genre/{id}/{name}', [AnimeController::class, 'showByGenre'])->name('anime.genre');
require __DIR__.'/auth.php';
