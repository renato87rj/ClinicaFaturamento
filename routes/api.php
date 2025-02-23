<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => app()->version());

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

