<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('products', \App\Http\Controllers\ProductsController::class);
    Route::get('/my/orders', [OrderController::class,'my_orders'])->name('my_orders');
    Route::get('/invoices', [InvoiceController::class,'index'])->name('invoices.index');
    Route::get('/invoices/{id}', [InvoiceController::class,'show'])->name('invoices.show');
    //Route::resource('/my/invoice', [\App\Http\Controllers\InvoiceController::class,'my_invoices']);


});

