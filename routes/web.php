<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\AboutController::class, 'index'])->name('home');

//Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/catalog', [App\Http\Controllers\Catalog\CatalogController::class, 'filterProduct'])->name('catalog');

Route::get('/catalog/sort/priceproduct', [App\Http\Controllers\Catalog\CatalogController::class, 'sortPriceProduct'])->name('catalog.price');
//Route::get('/catalog/sort/{name}', [App\Http\Controllers\Catalog\CatalogController::class, 'sortNameProduct'])->name('catalog.name');
//Route::get('/catalog/sort/year', [App\Http\Controllers\Catalog\CatalogController::class, 'sortPriceProduct'])->name('catalog.price');
Route::get('/catalog/{product_id}', [App\Http\Controllers\Catalog\CatalogController::class, 'showProduct'])->name('catalog.product');

Route::get('/basket', [App\Http\Controllers\Basket\CartController::class, 'checkout'])->name('basketShow');
Route::post('/basket', [App\Http\Controllers\Basket\CartController::class, 'index'])->name('basketPost');
//удаление из корзины
Route::get('/basket/{id}', [App\Http\Controllers\Basket\CartController::class, 'destroy'])->name('basketBtn');
//Route::get('/basket/{id}', [App\Http\Controllers\Basket\CartController::class, 'PlusOrMinus'])->name('basketPlusOrMinus');

Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');

Route::get('/admin', [App\Http\Controllers\AdminUserController::class, 'index'])->name('adminget');
Route::post('/admin', [App\Http\Controllers\AdminUserController::class, 'create'])->name('adminpost');

Route::get('/test', function() {
    return view('test');
});
