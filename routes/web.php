<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Category Route
Route::get('/admin/category', [CategoryController::class, 'index']);
Route::get('/admin/create/category', [CategoryController::class, 'create']);
Route::post('/admin/store/category', [CategoryController::class, 'store']);
Route::get('/admin/edit/{category}', [CategoryController::class, 'edit']);
Route::post('/admin/update/{category}', [CategoryController::class, 'update']);
Route::get('/admin/destroy/{category}', [CategoryController::class, 'destroy']);

//subCategory Route

Route::get('/admin/subCategory', [SubCategoryController::class, 'index']);
Route::get('/admin/create/subCategory', [SubCategoryController::class, 'create']);
Route::post('/admin/store/subCategory', [SubCategoryController::class, 'store']);
Route::get('/admin/edit/{subCategory}', [SubCategoryController::class, 'edit']);
Route::post('/admin/update/{subCategory}', [SubCategoryController::class, 'update']);
Route::get('/admin/destroy/{subCategory}', [SubCategoryController::class, 'destroy']);

require __DIR__.'/auth.php';
