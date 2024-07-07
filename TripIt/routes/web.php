<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['checkRole'])
    ->name('dashboard');
Route::get('/order', function () {
    return view('order');
})->name('order');
Route::get('/event', function () {
    return view('event');
})->name('event');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('checkRole')->group(function () {
    Route::post('/addcategory', [CategoryController::class, 'store'])->name('category.add');
    Route::post('/addevent', [EventController::class, 'store'])->name('event.add');
});

require __DIR__ . '/auth.php';
