<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdactController;
use App\Models\ProductsCategory;
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

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::post('/new-password', [AuthController::class, 'newPassword'])->middleware('auth')->name('new-password');

Route::get('/products', [ProdactController::class, "products"])->middleware('auth')->name('products');

Route::get('product/{id}', [ProdactController::class, 'showOneProduct']);

Route::get('product/add-to-cart/{id}', [ProdactController::class, 'addToCart'])->middleware('auth')->name('addToCartProducts');

Route::get('/cart', [ProdactController::class, "cart"])->middleware('auth')->name('cart');

Route::get('deleteFromCart/{cart_id}', [ProdactController::class, 'deleteFromCart'])->middleware('auth')->name('deleteCart');
