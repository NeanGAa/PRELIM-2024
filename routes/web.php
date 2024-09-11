<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/pictures', function () {
    return view('picture');
})->name('pictures.index');
