<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;

Route::get('dashboard/user', [UserController::class, 'index'])->name('user');
Route::get('/dashboard/user/fetchDataRecord', [UserController::class, 'fetchUserRecord'])->name('fetchDataRecord');
Route::post('/dashboard/user/createUserRecord', [UserController::class, 'createUserRecord'])->name('createUserRecord');
Route::delete('/dashboard/user/deleteUserRecord/{id}', [UserController::class, 'deleteUserRecord'])->name('deleteUserRecord');
Route::post('/dashboard/user/updateUserRecord', [UserController::class, 'updateUserRecord'])->name('updateUserRecord');
