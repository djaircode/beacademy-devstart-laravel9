<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/user/{$id}',[UserController::class,'show'])->name('users.show');