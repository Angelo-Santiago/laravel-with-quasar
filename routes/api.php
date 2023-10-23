<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Clients\{ClientPostsController,ClientAddController, ClientShowController, ClientUpdateController, ClientDeleteController};

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', ClientPostsController::class);
Route::post('/posts', ClientAddController::class);
Route::get('/posts/{id}', ClientShowController::class);
Route::put('/posts/{id}', ClientUpdateController::class);
Route::delete('/posts/{id}', ClientDeleteController::class);
