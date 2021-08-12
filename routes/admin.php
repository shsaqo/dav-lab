<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('news', function () {
        return view('admin.news');
    })->name('news');
});


