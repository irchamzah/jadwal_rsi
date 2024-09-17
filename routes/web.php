<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', function () {
    // Placeholder for users management
    return "Users Management Page";
})->name('users');

Route::get('/settings', function () {
    // Placeholder for settings page
    return "Settings Page";
})->name('settings');
