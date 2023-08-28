<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin/')->name('admin.')->group(function () {
    Route::resource('/', DashboardController::class);
});
