<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/teste01', function () {
    return view('teste01');
});