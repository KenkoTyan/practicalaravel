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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');


//Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
/*Route::prefix('catalog')->group(function () {
    
});*/
//Route::get('/catalog', [App\Http\Controllers\Catalog\CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog', [App\Http\Controllers\Catalog\CatalogController::class, 'filterProduct'])->name('catalog');
Route::get('/catalog/{product_id}', [App\Http\Controllers\Catalog\CatalogController::class, 'showProduct']);

//Route::get('/catalog/{id}', [App\Http\Controllers\Catalog\CatalogController::class, 'showProduct']);

//Route::get('/prod', [App\Http\Controllers\Catalog\CatalogController::class, 'cat']);


//Route::get('/cart/{id}', [App\Http\Controllers\Catalog\CatalogController::class, 'showProduct']);
//Route::get('/catalog', [App\Http\Controllers\CategoryController::class, 'index'])->name('catalog');
//Route::get('/catalog/{id}', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');
