<?php

use App\Http\Controllers\HoroscopeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompatibilityController;

Route::get('/', [HoroscopeController::class, 'index'])
    ->name('horoscope.index');

Route::post('/horoscope/generate', [
    HoroscopeController::class,
    'generate',
])
    ->middleware('throttle:5,1')
    ->name('horoscope.generate');

Route::get('/horoscope/result/{horoscopeRequest}', [
    HoroscopeController::class,
    'result',
])
    ->name('horoscope.result');

Route::get('/compatibility', [
    CompatibilityController::class,
    'index',
])->name('compatibility.index');

Route::post('/compatibility/generate', [
    CompatibilityController::class,
    'generate',
])->middleware('throttle:5,1')->name('compatibility.generate');

Route::get('/compatibility/result/{compatibilityRequest}', [
    CompatibilityController::class,
    'result',
])->name('compatibility.result');