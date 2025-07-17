<?php

use Illuminate\Support\Facades\Route;
use App\Models\test;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

route::get('/contact/{id}', function (string $id) {
    return view('contact');
});
