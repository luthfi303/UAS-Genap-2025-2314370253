<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Kegiatan;
Route::get('/', function () {
    return view('dashboard', [
        'produkCount' => Product::count(),
        'kategoriCount' => Category::count(),
        'kegiatanCount' => Kegiatan::count(),
        'categories' => Category::latest()->get(),
    ]);
});

Route::resource('kegiatans', KegiatanController::class);
Route::resource('products', ProductController::class);