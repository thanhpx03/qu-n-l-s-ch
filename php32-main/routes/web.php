<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('layouts.master');
});

Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])
    ->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])
    ->name('auth.logout');

Route::prefix('admin')
    ->as('admin.')
    ->middleware(['auth', 'check_admin'])
    ->group(function () {
        Route::get('/', function () {
            $title = 'SB Admin 2 - Dashboard';
            return view('admin.dashboard', compact('title'));
        })->name('dashboard');

        Route::resource('users', UserController::class);
    });
