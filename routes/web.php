<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MateriController; // Ensure this class exists in the specified namespace
use App\Http\Controllers\RekomendasiController; // Ensure this class exists in the specified namespace

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Rute untuk halaman kegiatan (menggunakan database)
Route::get('/kegiatan', [ArticleController::class, 'index']);

Route::get('/kegiatan/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Rute untuk halaman materi (menggunakan database)
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');

Route::get('/rekomendasi/{id}', [RekomendasiController::class, 'show'])->name('rekomendasi.show');

