<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('users')->middleware('auth:api')->group(function () {

});

Route::prefix('orders')->middleware('auth:api')->group(function () {

});

Route::prefix('organizers')->middleware('auth:api')->group(function () {

});

Route::prefix('rewards')->middleware('auth:api')->group(function () {

});

Route::prefix('role')->middleware('auth:api')->group(function () {

});

Route::prefix('transactions')->middleware('auth:api')->group(function () {

});

Route::prefix('user-roles')->middleware('auth:api')->group(function () {

});

Route::prefix('wallets')->middleware('auth:api')->group(function () {

});
