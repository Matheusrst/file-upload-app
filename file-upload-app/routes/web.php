<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

/**
 * rotas dados web
 */
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

/**
 * rotas arquivos web
 */
Route::get('/upload', [FileUploadController::class, 'showUploadForm']);
Route::post('/upload', [FileUploadController::class, 'uploadFile']);


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
