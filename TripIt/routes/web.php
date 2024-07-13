<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LodgingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransportationController;
use Illuminate\Support\Facades\Route;

//public routes for all start
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/event-list', [EventController::class, 'showEventList'])->name('event-list');
Route::get('/package', function () {
    return view('package');
})->name('package');

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
        Route::get('/event-list-admin', function () {
            return view('event'); // the blade page
        })->name('event.list.admin');
        Route::get('/event-create', function () {
            return view('event-create');
        })->name('event.create');
        Route::post('/addevent', [EventController::class, 'store'])->name('event.add');
    });
    // all events routing end
    Route::prefix('category')->group(function () {
        Route::get('/search', [CategoryController::class, 'search'])->name('category.search');
        Route::post('/addcategory', [CategoryController::class, 'store'])->name('category.add');
        Route::get('/firstfive', [CategoryController::class, 'firstFive'])->name('category.firstFive');
    });
    Route::prefix('gallery')->group(function () {
        // Route::get('/search', [TransportationController::class, 'search'])->name('transportation.search');
        // Route::post('/addtransportation', [TransportationController::class, 'store'])->name('transportation.add');
    });
});

require __DIR__ . '/auth.php';
