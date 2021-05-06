<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $products = Product::query()->orderBy('id', 'desc')->get();
    return view('index',compact('products'));
})->name('index');

Route::get('/catalog', [PostController::class, 'show'])->name('catalog');

Route::get('/product/{product}', [PostController::class, 'show_product']);
Route::get('/admin', [AdminController::class, 'show'])->name('admin');

Route::post('/admin', [AdminController::class, 'login'])->name('admin.login');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/product_create', [AdminController::class, 'add_product'])->name('admin.add_product');
Route::get('/admin/product_edit/{product}', [AdminController::class, 'product_edit_show']);
Route::post('/admin/product_edit/{product}', [AdminController::class, 'product_edit_store'])->name('admin.product_edit.store');
Route::post('/admin/product_create', [AdminController::class, 'product_store'])->name('admin.store_product');
Route::get('/admin/create/categories', [AdminController::class, 'add_categories'])->name('admin.add_categories');
Route::get('/admin/product_delete/{product}', [AdminController::class, 'product_delete']);
