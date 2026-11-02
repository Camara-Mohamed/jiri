<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/teacher.php';
require __DIR__.'/evaluator.php';

// Public
Route::view('/', 'welcome')->name('home');
