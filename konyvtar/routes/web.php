<?php

use App\Http\Controllers\Filecontroller;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', [MailController::class, 'index']);

Route::get('file-upload', [Filecontroller::class, 'index']);
Route::post('file-upload', [FileController::class, 'store'])->name('file.store');
