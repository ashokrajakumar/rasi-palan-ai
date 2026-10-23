<?php

use App\Http\Controllers\HoroscopeController;
use Illuminate\Support\Facades\Route;

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