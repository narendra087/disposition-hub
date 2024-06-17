<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

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

use App\Http\Controllers;

Route::get('/', [Controllers\ApplicationController::class, 'index'])->name('application');
Route::post('/', [Controllers\ApplicationController::class, 'store']);

Route::get('/masuk', [Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [Controllers\LoginController::class, 'authenticate']);

Route::post('/logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');

Route::get('/admin', [Controllers\AdminController::class, 'index'])->name('admin')->middleware(IsAdmin::class);
Route::post('/kirim-disposisi', [Controllers\AdminController::class, 'sendDisposition'])->name('admin.send_disposition');

Route::get('/dasbor', [Controllers\UserController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/teruskan-disposisi', [Controllers\UserController::class, 'forwardDisposition'])->name('user.forward_disposition');

