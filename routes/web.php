<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EncryptController;

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
})->name('index');

Route::post('dashboard',[LoginController::class,'index'])->name('dashboard');
Route::get('session',[LoginController::class,'session'])->name('session');
Route::any('signout', [LoginController::class, 'destroySession'])->name('signout');

// encryptfile
Route::post('uploadFileEncrypt',[EncryptController::class,'uploadFile'])->name('uploadFileEncrypt');