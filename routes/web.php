<?php

use Illuminate\Support\Facades\Route;

Route::get('/{page?}', function () {
    return view('post.post');
})->where('page', '[\/\w\.-]*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
