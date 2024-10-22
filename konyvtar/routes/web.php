<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});
//levélküldés
Route::get('send-email', [MailController::class, 'index']);
Route::get('file-upload',[FileController:: class,'index']);
Route::get('send-mail',[MailController:: class,'index']);
require __DIR__.'/auth.php';
