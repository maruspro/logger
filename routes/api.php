<?php

use App\Http\Controllers\API\V1\LogController;
use Illuminate\Support\Facades\Route;

/** @var Route $router */

$router->group(['prefix' => 'v1', 'as' => 'v1.'], function() use ($router) {
    $router->apiResource('logs', LogController::class)
        ->only(['index', 'store', 'destroy']);
});
