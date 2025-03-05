<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ContactController;
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

Route::get('/kegiatan', [ArticleController::class, 'index']);

Route::get('/kegiatan/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');

Route::get('/rekomendasi/{id}', [RekomendasiController::class, 'show'])->name('rekomendasi.show');

Route::get('/materi/{id}', [MateriController::class, 'show'])->name('detail-materi.show');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
