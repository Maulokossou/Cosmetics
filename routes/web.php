<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index'])->name('index');
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/service', [EventController::class, 'service'])->name('service');
Route::get('/contact', [EventController::class, 'contact'])->name('contact');
Route::get('/eventdescription', [EventController::class, 'eventdescription'])->name('eventdescription');
Route::get('/payment', [EventController::class, 'payment'])->name('payment');
Route::get('/succes', [EventController::class, 'succes'])->name('succes');

