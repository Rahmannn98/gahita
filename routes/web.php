<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/home', function () {
    return view('home');
});
Route::get('/materi', function () {
    return view('materi');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/kegiatan', [ArticleController::class, 'index']);

Route::get('/kegiatan/{id}', [ArticleController::class, 'show'])->name('articles.show');

