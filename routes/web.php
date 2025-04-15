<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('home'); // Gantilah dengan halaman dashboard Anda
})->middleware('auth')->name('home');
Route::get('/dashboard', function () {
    return view('dashboard'); // nanti kamu buat file blade nya
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
});

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
// web.php
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Route untuk Kursus Terdaftar
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');

// Route untuk Riwayat Pembelian
Route::get('/history', [HistoryController::class, 'index'])->name('history');

Route::get('/history/{id}', [HistoryController::class, 'show'])->name('detail-history');

