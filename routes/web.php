<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);
Route::resource('/country', CountryController::class);


require __DIR__ . '/auth.php';
