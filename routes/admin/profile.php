<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\ProfileController;

Route::get('dashboard/profile', [ProfileController::class, 'index'])->name('profile');
//// Route::get('/dashboard/setting/branch/fetechDataRecord', [BranchController::class, 'fetchBranchRecord'])->name('fetchBranchRecord');
//Route::get('/dashboard/setting/branch/fetchDataRecord', [BranchController::class, 'fetchBranchRecord'])->name('fetchBranchRecord');
//Route::post('/dashboard/setting/branch/createCourseRecord', [BranchController::class, 'createBranchRecord'])->name('createBranchRecord');
//Route::delete('/dashboard/setting/branch/deleteCourseRecord/{id}', [BranchController::class, 'deleteBranchRecord'])->name('deleteBranchRecord');
//Route::post('/dashboard/setting/branch/updateCourseRecord', [BranchController::class, 'updateBranchRecord'])->name('updateBranchRecord');
