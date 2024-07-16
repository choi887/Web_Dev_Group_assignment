<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LodgingsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\WelcomeController;
use App\Models\Package;
use Illuminate\Support\Facades\Route;

//public routes for all start
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('/event-list', [EventController::class, 'showEventList'])->name('event-list');
Route::get('/event-list/{category}/{event_id}', [EventController::class, 'showEvent'])->name('event-specific');
Route::get('/package-list', [PackageController::class, 'showPackageList'])->name('package-list');
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
    Route::post('/join-event', [EventController::class, 'joinEvent'])->name('join-event');
});
//authenticated functions end ( Usually for Users )

Route::prefix('administrator')->middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('event')->group(function () {
        Route::get('/event-list-admin', function () {
            return view('event-admin-list'); // the blade page
        })->name('event.list.admin');
        Route::get('/event-create', function () {
            return view('event-create'); //page to create event
        })->name('event.create');
        Route::post('/addevent', [EventController::class, 'store'])->name('event.add');
    });
    Route::prefix('package')->group(function () {
        Route::get('/package-create', function () {
            return view('package-create');
        })->name('package.create');
        Route::post('/add-package', [PackageController::class, 'store'])->name('package.add');
    });
    // all events routing end
    Route::prefix('category')->group(function () {
        Route::get('/search', [CategoryController::class, 'search'])->name('category.search');
        Route::post('/add-category', [CategoryController::class, 'store'])->name('category.add');
        Route::get('/first-five', [CategoryController::class, 'firstFive'])->name('category.firstFive');
    });
    Route::prefix('gallery')->group(function () {
        // Route::get('/search', [TransportationController::class, 'search'])->name('transportation.search');
        // Route::post('/addtransportation', [TransportationController::class, 'store'])->name('transportation.add');
    });
});

require __DIR__ . '/auth.php';
