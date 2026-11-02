<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/teacher.php';
require __DIR__.'/evaluator.php';

// Connexion
Route::view('/', 'auth.login')->name('login');
