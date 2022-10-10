<?php

use Orion\Facades\Orion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UserCardsController;

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

Route::group(['as' => 'api.'], function() {
    Orion::resource('users', UsersController::class);
    Orion::resource('cards', CardsController::class);
    Orion::resource('payments', PaymentsController::class);
    Orion::resource('shops', ShopsController::class);
    Orion::hasManyResource('users', 'cards' , UserCardsController::class);
});
