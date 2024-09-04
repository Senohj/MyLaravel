<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/skills', function () {
    return view('pages.skills');
});
Route::get('/education', function () {
    return view('pages.education');
});
Route::get('/resume', function () {
    return view('pages.resume');
});


