<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AppController;

Route::group(['as' => 'web.'], function () {
    // Define your web routes here
    Route::get('/', [AppController::class, 'index'])->name('home');
    Route::get('/about', [AppController::class, 'about'])->name('about');
    Route::get('/portfolio', [AppController::class, 'portfolio'])->name('portfolio');
    Route::get('/blogs', [AppController::class, 'blogs'])->name('blogs');
    Route::get('/contact', [AppController::class, 'contact'])->name('contact');
    // quotation
    Route::get('/quotation', [AppController::class, 'quotation'])->name('quotation');
});
