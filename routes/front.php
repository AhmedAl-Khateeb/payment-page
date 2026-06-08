<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PaymobCallBackController;
use App\Http\Controllers\Front\PaymobController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('front.home');
    Route::get('/about', [HomeController::class, 'about'])->name('front.about');

    Route::middleware(['auth'])->group(function () {
        Route::post('/payment/pay', [PaymobController::class, 'pay'])->name('payment.pay');

        Route::get('/checkout', [PaymobController::class, 'checkoutForm'])
        ->name('checkout.form');
    });
});
Route::any('/paymob/callback', [PaymobCallBackController::class, 'callback']);

Route::get('/paymob/response', [PaymobCallBackController::class, 'response'])
    ->name('paymob.response');
