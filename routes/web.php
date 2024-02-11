<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PilihKamiController;
use App\Http\Controllers\ProductController;
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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::delete('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.main.index');
})->middleware('auth');

// Dashboard Produk
Route::controller(ProductController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/products/', 'index')->name('dashboard.products.index');
    // tampil form add
    Route::get('/dashboard/products/create', 'create')->name('dashboard.products.create');
    // proses add
    Route::post('/dashboard/products', 'store')->name('dashboard.products.store');
    // edit
    // {product:slug} penjelasan: product itu nama model, slug nama field yang cari
    Route::get('/dashboard/products/{product:slug}/edit', 'edit')->name('dashboard.products.edit');
    Route::put('/dashboard/products/{product:slug}', 'update')->name('dashboard.products.update');
    //hapus
    // {product:slug} penjelasan: product itu nama model, slug nama field yang cari
    Route::delete('/dashboard/products/{product:slug}', 'destroy')->name('dashboard.products.destroy');
});

// Dashboard Kategori
Route::controller(CategoryController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/categories/', 'index')->name('dashboard.categories.index');
    Route::get('/dashboard/categories/create', 'create')->name('dashboard.categories.create');
    Route::post('/dashboard/categories', 'store')->name('dashboard.categories.store');
    Route::get('/dashboard/categories/{category:slug}/edit', 'edit')->name('dashboard.categories.edit');
    Route::put('/dashboard/categories/{category:slug}', 'update')->name('dashboard.categories.update');
    Route::delete('/dashboard/categories/{category:slug}', 'destroy')->name('dashboard.categories.destroy');
});

// Dashboard About Company
Route::controller(AboutCompanyController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/about-company', 'index')->name('dashboard.aboutcompany.index');
    Route::get('/dashboard/about-company/{about_company:id}/edit', 'edit')->name('dashboard.aboutcompany.edit');
    Route::put('/dashboard/about-company/{about_company:id}', 'update')->name('dashboard.aboutcompany.update');
});

// Dashboard Layanan Kami
Route::controller(LayananController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/layanan-kami', 'index')->name('dashboard.layanan.index');
    Route::get('/dashboard/layanan-kami/create', 'create')->name('dashboard.layanan.create');
    Route::post('/dashboard/layanan-kami', 'store')->name('dashboard.layanan.store');
    Route::get('/dashboard/layanan-kami/{layanan:id}/edit', 'edit')->name('dashboard.layanan.edit');
    Route::put('/dashboard/layanan-kami/{layanan:id}', 'update')->name('dashboard.layanan.update');
    Route::delete('/dashboard/layanan-kami/{layanan:id}', 'destroy')->name('dashboard.layanan.destroy');
});

// Dashboard Menu Mengapa Memilih Kami
Route::controller(PilihKamiController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/mengapa-pilih-kami', 'index')->name('dashboard.pilihkami.index');
    Route::get('/dashboard/mengapa-pilih-kami/create', 'create')->name('dashboard.pilihkami.create');
    Route::post('/dashboard/mengapa-pilih-kami', 'store')->name('dashboard.pilihkami.store');
    Route::get('/dashboard/mengapa-pilih-kami/{pilih_kami:id}/edit', 'edit')->name('dashboard.pilihkami.edit');
    Route::put('/dashboard/mengapa-pilih-kami/{pilih_kami:id}', 'update')->name('dashboard.pilihkami.update');
    Route::delete('/dashboard/mengapa-pilih-kami/{pilih_kami:id}', 'destroy')->name('dashboard.pilihkami.destroy');
});
