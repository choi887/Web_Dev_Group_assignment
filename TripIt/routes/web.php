<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//public routes for all start
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/order', function () {
    return view('order');
})->name('order');

//public routes for all end
//authenticated functions start ( Usually for Users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//authenticated functions end ( Usually for Users )

Route::prefix('administrator')->middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('event')->group(function () {
        Route::get('/event-list', function () {
            return view('event'); // the blade page
        })->name('event.list');
        Route::get('/event-create', function () {
            return view('event-create');
        })->name('event.create');
    });
    Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');
    Route::post('/addcategory', [CategoryController::class, 'store'])->name('category.add');
    Route::post('/addevent', [EventController::class, 'store'])->name('event.add');
});

require __DIR__ . '/auth.php';
