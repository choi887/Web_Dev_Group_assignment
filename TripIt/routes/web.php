<?php

use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LodgingsController;
use App\Http\Controllers\TransportationController;

//public routes for all start
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('/event-list', [EventController::class, 'showEventList'])->name('event-list');
Route::get('/event-list/{category}/{event_id}', [EventController::class, 'showEvent'])->name('event-specific');
Route::get('/package-list', [PackageController::class, 'showPackageList'])->name('package-list');
Route::get('/package-list/{package_id}', [PackageController::class, 'showPackage'])->name('package-specific');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
//public routes for all end

//authenticated functions start ( Usually for Users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/join-event', [EventController::class, 'joinEvent'])->name('join-event');
    Route::post('/join-package', [PackageController::class, 'joinPackage'])->name('join-package');
    Route::get('/order-list', [OrderController::class, 'showOrderPage'])->name('order-list');
    Route::post('/send-inquiry-response', [EmailController::class, 'sendInquiryResponse'])->name('send-inquiry-response');
});
//authenticated functions end ( Usually for Users )

Route::prefix('administrator')->middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/dashboard', [OrderController::class, 'showOrderList'])->name('dashboard');
    Route::get('/order-list-admin', [OrderController::class, 'showAdminOrderList'])->name('order.list.admin');
    Route::prefix('event')->group(function () {
        Route::get('/event-list-admin', [EventController::class, 'showAdminEventList'])->name('event.list.admin');
        Route::get('/event-create', function () {
            return view('event-create'); //page to create event
        })->name('event.create');
        Route::post('/addevent', [EventController::class, 'store'])->name('event.add');
    });
    Route::prefix('package')->group(function () {
        Route::get('/package-list-admin', [PackageController::class, 'showAdminPackageList'])->name('package.list.admin');
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
