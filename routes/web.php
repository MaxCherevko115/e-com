<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.index');
})->name('dashboard');
