<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MasterController::class, 'index'])->name('index');

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
})->name('register');

Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register.store');

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
})->name('login');

Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login.store');
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/destinations', [MasterController::class, 'destinations'])->name('destinations');

Route::get('/destinations/1', function () {
    return view('destination_details', ['title' => 'Destination Details']);
})->name('destination_details');

Route::get('/tours', [MasterController::class, 'tours'])->name('tours');

Route::get('/tours/1', function () {
    return view('tour_details', ['title' => 'Tour Details']);
})->name('tour_details')->middleware('auth');

Route::get('/transportations', [MasterController::class, 'transportations'])->name('transportations');

Route::get('/transportations/1', function () {
    return view('transportation_details', ['title' => 'Transportation Details']);
})->name('transportation_details');

Route::get('/hotels', [MasterController::class, 'hotels'])->name('hotels');

Route::get('/hotels/1', function () {
    return view('hotel_details', ['title' => 'Hotel Details']);
})->name('hotel_details');

Route::get('/products/1', function () {
    return view('product_details', ['title' => 'Product Details']);
})->name('product_details');

Route::get('/events', [MasterController::class, 'events'])->name('events');

Route::get('/dashboard', [MasterController::class, 'dashboard'])->name('dashboard');

Route::get('/transactions/{id}',  [MasterController::class, 'transactions'])->name('transactions');

Route::get('/payment_confirmations/1', function () {
    return view('payment_confirmations', ['title' => 'Payment Confirmations']);
})->name('payment_confirmations');

Route::post('orders', [App\Http\Controllers\MasterController::class, 'orders'])->name('orders');
Route::patch('orders', [App\Http\Controllers\MasterController::class, 'updateOrder'])->name('orders.update');

Route::patch('orders/{id}', [App\Http\Controllers\MasterController::class, 'confirmOrder'])->name('confirmOrder');
