<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Customer
Route::name('api.')->group(function () {
    Route::apiResource('customers', CustomerController::class);
});

// Post
Route::apiResource('posts', PostController::class, ['names' => 'api.posts']);
