<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamsController;

/*
|--------------------------------------------------------------------------
| Web Routes - Sams Studios
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', [SamsController::class, 'index'])->name('film.index');

// Rute Navigasi
Route::get('/cinema', [SamsController::class, 'cinema'])->name('film.cinema');
Route::get('/kontak', [SamsController::class, 'kontak'])->name('film.kontak');
Route::get('/aplikasi', [SamsController::class, 'aplikasi'])->name('film.aplikasi');

// Rute Detail Film
Route::get('/film/{id}', [SamsController::class, 'show'])->name('film.show');

// Rute Aksi & Halaman Watchlist
Route::post('/watchlist/toggle/{id}', [SamsController::class, 'toggleWatchlist'])->name('watchlist.toggle');
Route::get('/watchlist', [SamsController::class, 'watchlist'])->name('film.watchlist');