<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RekomendasiController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login'); // Pastikan file ini ada di resources/views/auth/login.blade.php
})->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return view('home'); // Gantilah dengan halaman dashboard Anda
})->middleware('auth')->name('home');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/kegiatan', [ArticleController::class, 'index']);

Route::get('/kegiatan/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');

Route::get('/rekomendasi/{id}', [RekomendasiController::class, 'show'])->name('rekomendasi.show');

Route::get('/materi/{id}', [MateriController::class, 'show'])->name('detail-materi.show');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route untuk Kursus Terdaftar
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');

// Route untuk Riwayat Pembelian
Route::get('/history', [HistoryController::class, 'index'])->name('history');
