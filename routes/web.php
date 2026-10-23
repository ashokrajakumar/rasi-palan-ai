<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoroscopeController;
use App\Http\Controllers\CompatibilityController;
use App\Http\Controllers\AstrologerChatController;

// Home page
Route::view('/', 'welcome')->name('home');

// Daily Horoscope
Route::get('/horoscope', [HoroscopeController::class, 'index'])
    ->name('horoscope.index');

Route::post('/horoscope/generate', [
    HoroscopeController::class,
    'generate',
])->middleware('throttle:5,1')->name('horoscope.generate');

Route::get('/horoscope/result/{horoscopeRequest}', [
    HoroscopeController::class,
    'result',
])->name('horoscope.result');

// Love & Marriage Compatibility
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


Route::get('/astrologer-chat', [
    AstrologerChatController::class,
    'index',
])->name('astrologer-chat.index');

Route::post('/astrologer-chat/send', [
    AstrologerChatController::class,
    'send',
])->middleware('throttle:10,1')
    ->name('astrologer-chat.send');

Route::post('/astrologer-chat/clear', [
    AstrologerChatController::class,
    'clear',
])->name('astrologer-chat.clear');

