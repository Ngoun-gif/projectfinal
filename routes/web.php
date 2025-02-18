<?php

use phpApp\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\productController;
use App\Http\Controllers\Dashboard\supplierController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BranchController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeFrontendController::class)->group(function() {
    Route::get('/', 'homeFrontend');
});

Route::get('/home', [LinkController::class, 'index']);
Route::get('/contact', [LinkController::class, 'contact']);
Route::get('/aboutus', [LinkController::class, 'aboutus']);
Route::get('/service', [LinkController::class, 'service']);
Route::get('/booking', [LinkController::class, 'booking']);
Route::get('/team', [LinkController::class, 'team']);
Route::get('/testimonial', [LinkController::class, 'testimonial']);
Route::get('/404', [LinkController::class, 'P404']);
Route::get('/shop', [LinkController::class, 'shop']);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'homeDashboard')->name('dashboard');
    });

    Route::get('/users', [UserController::class, 'userDashboard']);
    Route::get('/branch', [BranchController::class, 'branchDashboard']);
    Route::get('/customer', [CustomerController::class, 'customerDashboard']);
    Route::get('/product_type_1', [productController::class, 'productType1']);
    Route::get('/product_type_2', [productController::class, 'productType2']);
    Route::get('/product_type_3', [productController::class, 'productType3']);
    Route::get('/supplier', [supplierController::class, 'supplier']);
    Route::get('/create_user', [UserController::class, 'createUserDashboard']);

});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
