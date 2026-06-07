<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale().'/admin',
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    // login
    Route::get('login', [LoginController::class, 'show_login'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin')->group(function () {
        // logOut
        Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::get('index', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
});

