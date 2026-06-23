<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransparencyPrincipleController;
use App\Http\Controllers\LibraryPrinciplesController;



Route::get('/library-principles', [LibraryPrinciplesController::class, 'index'])
    ->name('library-principles');
    
Route::get('/', function () {
    return view('welcome');
});

Route::get('/principio-trasparenza', [TransparencyPrincipleController::class, 'index'])
    ->name('principio-trasparenza');