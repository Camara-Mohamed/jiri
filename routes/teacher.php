<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');
});
