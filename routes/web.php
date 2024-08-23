<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;

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

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/vendors', [VendorController::class, 'index'])->name('vendor.index');
Route::post('/vendors/perPage', [VendorController::class, 'index'])->name('vendor.perPage');
Route::post('/vendors/search', [VendorController::class, 'index'])->name('vendor.search');
Route::post('/vendors/filterVendorLevel', [VendorController::class, 'index'])->name('vendor.filterVendorLevel');
Route::post('/vendors/filterParentVendor', [VendorController::class, 'index'])->name('vendor.filterParentVendor');
Route::post('/vendors/filterProduct', [VendorController::class, 'index'])->name('vendor.filterProduct');
