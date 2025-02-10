<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/home', function () {
    return view('home');
});
Route::get('/pengajar', function () {
    return view('pengajar');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/kegiatan', [ArticleController::class, 'index']);

