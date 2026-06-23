<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryPrinciplesController;
use App\Http\Controllers\DesignPatternController;
use App\Http\Controllers\GuidelinesController;
use App\Http\Controllers\SuccessCriteriaController;
use App\Http\Controllers\Dp1Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\DesignPatternDetailController;



Route::get('/design-pattern/{pattern}', [DesignPatternDetailController::class, 'show'])
    ->where('pattern', '1|2')
    ->name('design-pattern.show');

Route::get('/principles/{principle}', [PrincipleController::class, 'show'])
    ->where('principle', 'transparency|fairness|automation-level|protection')
    ->name('principles.show');

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

