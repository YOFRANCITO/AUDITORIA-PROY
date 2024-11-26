<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/get-all', [UserController::class, 'getAll'])->name('User.getAll');
Route::post('/store-ajax', [UserController::class, 'storeAjax'])->name('User.storeAjax');
Route::post('/store-email-ajax', [UserController::class, 'storeEmailAjax'])->name('User.storeEmailAjax');
