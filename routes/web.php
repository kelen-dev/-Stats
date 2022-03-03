<?php

use App\Http\Controllers\ContactsController;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/search-r6', function () {
    return view('/p/search-r6');
})->name('search-r6');
Route::get('/r6', function () {
    return view('/p/r6');
})->name('r6');

Route::get('/search-fortnite', function () {
    return view('/p/search-fortnite');
})->name('search-fortnite');
Route::get('/fortnite', function () {
    return view('/p/fortnite/index');
})->name('fortnite');

Route::get('/search-league-of-legends', function () {
    return view('/p/search-lol');
})->name('search-lol');
Route::get('/league-of-legends', function () {
    return view('/p/lol');
})->name('lol');

Route::get('/searchvalorant', function () {
    return view('/p/search-valorant');
})->name('search-valorant');
Route::get('/valorant', function () {
    return view('/p/valorant');
})->name('valorant');

Route::get('/search-battlefield', function () {
    return view('/p/search-battlefield');
})->name('search-battlefield');
Route::get('/battlefield', function () {
    return view('/p/battlefield');
})->name('battlefield');

Route::get('/a-propos', function () {
    return view('/p/a-propos');
})->name('a-propos');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactsController::class, 'create'])->name('index');
    Route::post('/', [ContactsController::class, 'store'])->name('index');

    Route::get('/test-email', function () {
        return new ContactMessageCreated('KelenS', 'contact@kelens.fr', 'Ceci est un test');
    });
});
