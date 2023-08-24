<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;

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

Route::resource('/',App\Http\Controllers\HomeController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    
    Route::resource('Category',App\Http\Controllers\CategoryController::class);
    Route::resource('product',App\Http\Controllers\ProductController::class);

    

});

require __DIR__.'/auth.php';
Route::resource('product-client',App\Http\Controllers\ProductClientController::class);
Route::resource('cart',App\Http\Controllers\CartController::class);
Route::resource('bill',App\Http\Controllers\BillController::class);

Route::resource('tags',TagController::class,);



