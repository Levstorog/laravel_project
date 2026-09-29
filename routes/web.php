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
Route::get('/array', [MainController::class, 'showArray'])-> name('array');