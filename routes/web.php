<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home'); 

Route::get('/array', function () {
    return view('array');
})->name('array');

Route::get('/', [MainController::class, 'showIndex'])-> name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/array/mixing', [MainController::class, 'mixing'])->name('array.mixing');
Route::get('/array/sorting', [MainController::class, 'sorting'])->name('array.sorting');
Route::get('/array/filtr', [MainController::class, 'filtr'])->name('array.filtr');