<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserController;
use App\Models\Copy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//USER
Route::get('/users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
//BOOK
Route::get('/books', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class, 'show']);
//COPY
Route::get('/copies', [CopyController::class, 'index']);
Route::post('/copy', [CopyController::class, 'store']);
Route::get('/copy/{id}', [CopyController::class, 'show']);
//LENDING
Route::get('/lendings', [LendingController::class, 'index']);
Route::post('/lending', [LendingController::class, 'store']);
Route::get('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);
Route::put('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);
Route::delete('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);
