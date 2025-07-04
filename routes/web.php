<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/', function () {
    return view('home'); 
})->name('home');;

Route::get('/formularz', function () {
    return view('formularz'); 
})->name('formularz');


Route::get('/kontakt', function () {
    return view('kontakt'); 
});

Route::get('/orders', function () {
    return view('orders'); 
})->name('orders');
Route::get('/confirmation', function(){
    return view('confirmation');
})->name('confirmation');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/zloz-zamowienie', [OrderController::class, 'submitOrder'])->middleware('auth');

Route::get('/profile/partials/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});

use App\Http\Controllers\OrderController;

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');


