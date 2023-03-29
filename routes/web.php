<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
//CUSTOMERS
Route::get('/', [CustomerController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('delete/{id}', [CustomerController::class, 'delete'])->middleware('auth');
Route::get('addCustomer', [CustomerController::class, 'addCustomer'])->middleware('auth');
Route::post('saveCustomer', [CustomerController::class, 'saveCustomer'])->middleware('auth');
Route::get('edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
Route::post('updateCustomer', [CustomerController::class, 'updateCustomer'])->middleware('auth');
//PRODUCTS
Route::get('/products', [ProductController::class, 'index']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
Route::get('addProduct', [ProductController::class, 'addProduct']);
Route::post('saveProduct', [ProductController::class, 'saveProduct']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('updateProduct', [ProductController::class, 'updateProduct']);
?> 