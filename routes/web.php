<?php

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

use App\Http\Controllers;

Route::get('/', [Controllers\ApplicationController::class, 'index']);

Route::post('/', [Controllers\ApplicationController::class, 'store']);

Route::get('/masuk', function () {
    return view('auth.login');
});

Route::get('/admin', [Controllers\AdminController::class, 'index']);
Route::post('/kirim-disposisi', [Controllers\AdminController::class, 'sendDisposition'])->name('admin.send_disposition');

Route::get('/dashboard', [Controllers\UserController::class, 'index']);

