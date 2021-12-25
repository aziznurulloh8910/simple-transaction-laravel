<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// Route::get('/transaction', function () {
//     return view('transaction', [
//         "title" => "transaction",
//         "active" => "transaction"
//     ]);
// });

// Route::get('/barang', function () {
//     return view('barang', [
//         "title" => "Data Barang",
//         "active" => "barang"
//     ]);
// });

Route::resource('/transaction', TransactionController::class);
Route::resource('/product', ProductController::class);
