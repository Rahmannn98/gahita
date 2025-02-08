<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/materi', function () {
    return view('materi');
});
Route::get('/pengajar', function () {
    return view('pengajar');
});
Route::get('/contact', function () {
    return view('contact');
});


