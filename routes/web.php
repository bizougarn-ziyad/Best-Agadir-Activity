<?php

use Illuminate\Support\Facades\Route;
use App\Models\test;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

