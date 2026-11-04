<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;
use App\http\Controllers\ProductController;
use App\http\Controllers\OrderController;

Route::get("/", [CustomerController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);