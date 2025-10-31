<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//index
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('destinations', [DestinationsController::class, 'index'])->name('destinations');
Route::get('categories', [CategoriesController::class, 'index'])->name('categories');

//destinations admin
Route::middleware(['auth'])->group(function () {
    Route::post('destinations', [DestinationsController::class, 'store'])->name('destinations.store');
    Route::get('destinations/create', [DestinationsController::class, 'create'])->name('destinations.create');
    Route::get('destinations/{destination}/edit', [DestinationsController::class, 'edit'])->name('destinations.edit');
    Route::put('destinations/{destination}', [DestinationsController::class, 'update'])->name('destinations.update');
    Route::post('destinations/{destination}/toggle', [DestinationsController::class, 'toggleStatus'])->name('destinations.toggle');
})->middleware('can:isAdmin');

//destinations public
Route::get('destinations/{destination}', [DestinationsController::class, 'show'])->name('destinations.show');

//categories admin
Route::middleware(['auth'])->group(function () {
    Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');
})->middleware('can:isAdmin');

//categories public
Route::get('categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');

//reviews admin
Route::delete('reviews/{review}', [ReviewsController::class, 'destroy'])->name('reviews.destroy');

//reviews public
Route::post('destinations/{destination}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');

//search
Route::get('search', [SearchController::class, 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
