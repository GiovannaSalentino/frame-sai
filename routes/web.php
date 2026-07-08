<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryPrinciplesController;
use App\Http\Controllers\DesignPatternController;
use App\Http\Controllers\GuidelinesController;
use App\Http\Controllers\SuccessCriteriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\DesignPatternDetailController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/principles', [LibraryPrinciplesController::class, 'index'])
    ->name('library-principles');

Route::get('/principles/{principle}', [PrincipleController::class, 'show'])
    ->whereIn('principle', ['transparency', 'fairness', 'automation-level', 'protection'])
    ->name('principles.show');

Route::get('/guidelines', [GuidelinesController::class, 'index'])
    ->name('guidelines');

Route::get('/success-criteria', [SuccessCriteriaController::class, 'index'])
    ->name('success-criteria');

Route::get('/design-patterns', [DesignPatternController::class, 'index'])
    ->name('design-pattern');

Route::get('/design-patterns/{pattern}', [DesignPatternDetailController::class, 'show'])
    ->where('pattern', '[0-9]+(?:-[0-9]+)?')
    ->name('design-pattern.show');

Route::redirect('/library-principles', '/principles', 301);
Route::redirect('/design-pattern', '/design-patterns', 301);
