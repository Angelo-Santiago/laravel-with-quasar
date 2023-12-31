<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClientsController::class, 'index']);
Route::get('/visualizar-usuarios', [ClientsController::class, 'show']);

Route::get('/user', function () {
    return view('users');
});
