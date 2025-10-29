<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//index
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('destinations', [DestinationsController::class, 'index'])->name('destinations');
Route::get('categories', [CategoriesController::class, 'index'])->name('categories');

//destinations public
Route::get('destinations/{destination}', [DestinationsController::class, 'show'])->name('destinations.show');

//destinations admin
Route::post('destinations', [DestinationsController::class, 'store'])->name('destinations.store');
Route::get('destinations/create', [DestinationsController::class, 'create'])->name('destinations.create');
Route::get('destinations/{destination}/edit', [DestinationsController::class, 'edit'])->name('destinations.edit');
Route::put('destinations/{destination}', [DestinationsController::class, 'update'])->name('destinations.update');
Route::delete('destinations/{destination}', [DestinationsController::class, 'destroy'])->name('destinations.destroy');
Route::post('destinations/{destination}/toggle', [DestinationsController::class, 'toggleStatus'])->name('destinations.toggle');

//categories create, show, store
Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::get('categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');
Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');

//reviews store
Route::post('destinations/{destination}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
