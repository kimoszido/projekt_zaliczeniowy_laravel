<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegistrationController;
use Tests\Feature\Auth\AuthenticationTest;

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

Route::get('/', [HomeController::class, 'index'])
                ->name('home');

Route::get('/product/{id}', [ProductController::class, 'product'])
                ->name('product');

Route::get('/productContact/{id_product}', [ProductContactController::class, 'productContact'])
                ->name('productContact');

Route::get('/Contact', [ProductContactController::class, 'Contact'])
                ->name('Contact');

Route::post('/product/{id}', [ProductController::class, 'add_opinion', 'ProductController@product'])
                ->name('add_opinion');

Route::get('{name}/{id}', [CategoryController::class, 'category'])
                ->name('category');

Route::get('/category/{name}/{id}', [CategoryController::class, 'categoryMain'])
                ->name('categoryMain');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/a', function(){
    return view ('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
