<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('product.index');
Route::post('/products', [\App\Http\Controllers\ProductsController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('product.show');
Route::put('/products/update/{product}', [\App\Http\Controllers\ProductsController::class, 'update'])->name('product.update');
Route::get('/products/remove/{product}', [\App\Http\Controllers\ProductsController::class, 'remove'])->name('product.remove');

