<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventTicketController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\GuestEventController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('dashboard/')->middleware(['auth'])->group(function() {
    Route::get('', [AppController::class, 'index'])->name('dashboard');
    Route::resource('events', EventController::class);
    Route::resource('event_tickets', EventTicketController::class);
    Route::resource('reservations', ReservationController::class)->only(['index', 'show']);
    Route::fallback(function() {
        return view('app.error404');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name('guest.')->group(function() {
    Route::get('/', [GuestController::class, 'index'])->name('index');
    Route::get('/events', [GuestEventController::class, 'index'])->name('events.index');
    Route::get('/events/{slug}', [GuestEventController::class, 'showEvent'])->name('events.show');
    Route::get('/events/{slug}/{ticket}/customer', [GuestEventController::class, 'customer'])->name('event.customer');
    Route::post('/events/{slug}/{ticket}/customer', [GuestEventController::class, 'storeCustomer'])->name('event.customer.store');
    Route::get('/events/{slug}/ticket/{ticket}/payment', [GuestEventController::class, 'ticketPayment'])->name('event.payment');
    Route::get('/payment-success/invoice/', [GuestEventController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/service', [GuestController::class, 'service'])->name('service');
    Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
    Route::get('/succes', [GuestController::class, 'succes'])->name('succes');
});



require __DIR__.'/auth.php';
