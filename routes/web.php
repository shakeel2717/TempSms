<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NumberController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);
Route::resource('/country', CountryController::class);
Route::resource('/number', NumberController::class);


require __DIR__ . '/auth.php';
