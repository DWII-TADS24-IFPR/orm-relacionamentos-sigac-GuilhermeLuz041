<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NivelController;

Route::get('/new', function () {
    return View('welcome');
})->name('home');


// Route::resource('niveis', NivelController::class);
