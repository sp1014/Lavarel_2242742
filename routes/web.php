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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategorieController;


Route::get('/', function () {
    return view('welcome');
})->middleware('auth');



Route::get('/products', [ProductController::class, 'show']);
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('prodDelete');
Route::get('product/form/{id?}', [ProductController::class, 'form'])->name('product.form');
Route::post('/product/save',[ProductController::class,'save'])->name('product.save');

Route::get('/brands', [BrandController::class, 'show']);
Route::get('brand/delete/{id}', [BrandController::class, 'delete'])->name('brandDelete');
Route::get('brand/form/{id?}', [BrandController::class, 'form'])->name('brand.form');
Route::post('/brand/save',[BrandController::class,'save'])->name('brand.save');



Route::get('/categorie', [CategorieController::class, 'show']);
Route::get('categorie/delete/{id}', [CategorieController::class, 'delete'])->name('categorieDelete');
Route::get('categorie/form/{id?}', [CategorieController::class, 'form'])->name('categorie.form');
Route::post('/categorie/save',[CategorieController::class,'save'])->name('categorie.save');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
