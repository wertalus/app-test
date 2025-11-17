<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\WelcomePage;
use App\Livewire\ProductionLayout;
use App\Livewire\WagonsStatus;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/welcome-page', WelcomePage::class)->name('welcome-page');
    Route::get('/production-layout', ProductionLayout::class)->name('production');
    Route::get('/wagon-status', WagonsStatus::class)->name('allstatus');
    Route::get('/settings', \App\Livewire\AutoLogoutSettings::class)->name('settings');
    Route::get('/park', \App\Livewire\Park::class)->name('park');
});