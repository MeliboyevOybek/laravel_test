<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/register', [AuthController::class, "regester"])->name('register');

Route::post('/register-save', [AuthController::class, 'regiserSave'])->name('register-save');
Route::post('/loginsave', [AuthController::class, 'loginSave'])->name('login-save');

Route::get('/index', [AuthController::class, "index"])->middleware('auth')->name('index');

Route::get('/profil', [AuthController::class, "profil"])->middleware('auth')->name('profil');

Route::post('/update', [AuthController::class, "update"])->middleware('auth')->name("profile-update");
Route::get('/profile-update', [AuthController::class, "profileUpdate"])->middleware('auth')->name('profil-edit');

Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
