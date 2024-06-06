<?php

use App\Http\Controllers\Post\DeletePostController;
use App\Http\Controllers\Post\ShowPostController;
use App\Http\Controllers\Post\StorePostController;
use App\Http\Controllers\Post\UpdatePostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('post', [ShowPostController::class, 'snowAllPost'])->name('showAll.post');
Route::get('post/{post}', [ShowPostController::class, 'snowOmePost'])->name('showOne.post');
Route::post('post', [StorePostController::class, 'storePost'])->name('store.post');
Route::patch('post/{post}', [UpdatePostController::class, 'updatePost'])->name('update.post');
Route::delete('post/{post}', [DeletePostController::class, 'deletePost'])->name('delete.post');
