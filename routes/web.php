<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransparencyPrincipleController;
use App\Http\Controllers\LibraryPrinciplesController;
use App\Http\Controllers\DesignPatternController;
use App\Http\Controllers\GuidelinesController;
use App\Http\Controllers\SuccessCriteriaController;
use App\Http\Controllers\Dp1Controller;
use App\Http\Controllers\HomeController;


Route::get('/design-pattern/dp1', [Dp1Controller::class, 'index'])
    ->name('design-pattern.dp1');

Route::get('/success-criteria', [SuccessCriteriaController::class, 'index'])
    ->name('success-criteria');

Route::get('/guidelines', [GuidelinesController::class, 'index'])
    ->name('guidelines');

Route::get('/design-pattern', [DesignPatternController::class, 'index'])
    ->name('design-pattern');

Route::get('/library-principles', [LibraryPrinciplesController::class, 'index'])
    ->name('library-principles');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/principio-trasparenza', [TransparencyPrincipleController::class, 'index'])
    ->name('principio-trasparenza');