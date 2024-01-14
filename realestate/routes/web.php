<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/add-product', [ProductController::class, 'create']);
//     // Route::post('login', [AdminController::class, 'store'])->name('adminLogin');
// });
Route::get('/products', [ProductController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{pid}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/update/{pid}', [ProductController::class, 'update'])->name('products.update');
Route::get('/delete/{pid}', [ProductController::class, 'delete'])->name('products.delete');
