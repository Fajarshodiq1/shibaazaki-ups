<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalPriceController;
use App\Http\Controllers\UpsBrandController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contact', function () {
    return view('front.contact.index');
})->name('front.contact.index');


Route::get('/', [FrontController::class, 'index'])->name('pages.home');
// profile
Route::get('/profil', [FrontController::class, 'ProfileShow'])->name('front.profile.show');
// documentation
Route::get('/dokumentasi', [FrontController::class, 'DocumentationIndex'])->name('front.documentation.index');
Route::get('/category/{slug}', [FrontController::class, 'CategoryShow'])->name('front.category.show');
// posts index
Route::get('/post', [FrontController::class, 'PostIndex'])->name('front.post.index');
Route::get('/post/{slug}', [FrontController::class, 'PostShow'])->name('front.post.show');
// products
Route::get('/products/{slug}', [FrontController::class, 'ProductShow'])->name('front.products.show');
// ups-brands
Route::get('/ups', [FrontController::class, 'UpsBrandsIndex'])->name('front.ups-brands.index');
Route::get('/ups/{slug}', [FrontController::class, 'UpsBrandShow'])->name('front.ups-brands.show');
Route::prefix('rental')->name('rental.')->group(function () {
    Route::get('/', [FrontController::class, 'RentalIndex'])->name('index');
    Route::get('/{slug}', [FrontController::class, 'RentalShow'])->name('show');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // route untuk category
    Route::resource('categories', CategoryController::class);
    // route untuk product
    Route::resource('products', ProductController::class);
    // rute untuk rental
    Route::resource('rental-prices', RentalPriceController::class);
    // route untuk post
    Route::resource('posts', PostController::class);
    // route untuk gallery
    Route::resource('documentations', DocumentationController::class);
    Route::resource('ups-brands', UpsBrandController::class);
});

require __DIR__.'/auth.php';