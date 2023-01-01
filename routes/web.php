<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
});

// Main Player

// Main Player - Show
Route::get('/Product', [ProductController::class,'show']);
// Main Player - Delete
Route::delete('/Product/{kode_barang}', [ProductController::class,'destroy']);
// Main Player - Update
Route::get('/Product/Edit/{kode_barang}',[ProductController::class,'edit']);
Route::put('/Product/{kode_barang}',[ProductController::class,'update']);
// Main Player - Add Data
Route::get('/Product/tambah_product', [ProductController::class, 'create']);
Route::post('/Product/store_data', [ProductController::class, 'store']);