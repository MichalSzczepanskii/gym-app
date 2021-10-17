<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home')->with(['title' => 'Dashboard']);
    })->name('home');
});
