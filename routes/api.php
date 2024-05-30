<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RealEstateController;

Route::middleware('api')->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('real-estates', RealEstateController::class);
});
