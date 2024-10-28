<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;

// Route halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/supplies', [SupplyController::class, 'index'])->name('supplies.index');


// Routes untuk Produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Menampilkan daftar produk
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Form tambah produk
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Proses simpan produk
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show'); // Menampilkan detail produk
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Form edit produk
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Proses update produk
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Proses hapus produk

// Routes untuk Supplier
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index'); // Menampilkan daftar supplier
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create'); // Form tambah supplier
Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store'); // Proses simpan supplier
Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show'); // Menampilkan detail supplier
Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit'); // Form edit supplier
Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update'); // Proses update supplier
Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy'); // Proses hapus supplier

// Routes untuk Orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index'); // Menampilkan daftar order
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create'); // Form tambah order
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store'); // Proses simpan order
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show'); // Menampilkan detail order
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit'); // Form edit order
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update'); // Proses update order
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy'); // Proses hapus order
