<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'website',
], function () {
    Route::apiResource('products', ProductController::class)->only(['index', 'store']);
});
