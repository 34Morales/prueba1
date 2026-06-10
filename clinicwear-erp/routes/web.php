<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Store Front
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('store.home');
})->name('store.home');

Route::get('/women', function () {
    return view('store.women');
})->name('store.women');

Route::get('/men', function () {
    return view('store.men');
})->name('store.men');

Route::get('/scrubs', function () {
    return view('store.scrubs');
})->name('store.scrubs');

Route::get('/lab-coats', function () {
    return view('store.lab-coats');
})->name('store.lab-coats');

Route::get('/accessories', function () {
    return view('store.accessories');
})->name('store.accessories');

Route::get('/offers', function () {
    return view('store.offers');
})->name('store.offers');

Route::get('/contact', function () {
    return view('store.contact');
})->name('store.contact');

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';