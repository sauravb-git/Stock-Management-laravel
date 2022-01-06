<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\subCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


// Route::get('/category', function () {
//     return view('admin.category.index');
// });


Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
    Route::get('/', [categoryController::class, 'index'])->name('index');
    Route::get('/create', [categoryController::class, 'create'])->name('create');
    Route::post('/store', [categoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [categoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [categoryController::class, 'update'])->name('update');
    Route::get('/destroy/{id}', [categoryController::class, 'destroy'])->name('destroy');
});


Route::group(['prefix' => 'subcategories', 'as' => 'subcategory.'], function () {
    Route::get('/', [subCategoryController::class, 'index'])->name('index');
    Route::get('/create', [subCategoryController::class, 'create'])->name('create');
    Route::post('/store', [subCategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [subCategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [subCategoryController::class, 'update'])->name('update');
    Route::get('/destroy/{id}', [subCategoryController::class, 'destroy'])->name('destroy');
});










