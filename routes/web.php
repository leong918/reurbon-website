<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AppController;

Route::group(['as' => 'web.'], function () {
    // Define your web routes here
    Route::get('/', [AppController::class, 'index'])->name('home');
    Route::get('/about', [AppController::class, 'about'])->name('about');
});
