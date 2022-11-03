<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [CustomerController::class, 'getCustomer']);
Route::get('/inputCustomer', [CustomerController::class, 'inputCustomer']);
Route::post('/insertCustomer', [CustomerController::class, 'insertCustomer']);
Route::post('/deleteCustomer', [CustomerController::class, 'deleteCustomer']);
Route::get('/editCustomer/{id}', [CustomerController::class, 'editCustomer']);
Route::post('/updateCustomer', [CustomerController::class, 'updateCustomer']);

Route::get('/inputSupplier', [SupplierController::class, 'inputSupplier']);
Route::post('/insertSupplier', [SupplierController::class, 'insertSupplier']);
Route::post('/deleteSupplier', [SupplierController::class, 'deleteSupplier']);
Route::get('/editSupplier/{id}', [SupplierController::class, 'editSupplier']);
Route::post('/updateSupplier', [SupplierController::class, 'updateSupplier']);

Route::get('/inputBarang', [BarangController::class, 'inputBarang']);
Route::post('/insertBarang', [BarangController::class, 'insertBarang']);
Route::post('/deleteBarang', [BarangController::class, 'deleteBarang']);
Route::get('/editBarang/{id}', [BarangController::class, 'editBarang']);
Route::post('/updateBarang', [BarangController::class, 'updateBarang']);

Route::get('/inputPurchase', [OrderController::class, 'inputPurchaseOrder']);
Route::post('/insertPurchaseOrder', [OrderController::class, 'insertPurchaseOrder']);