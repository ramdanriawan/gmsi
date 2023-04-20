<?php

use App\Http\Controllers\Api\DisukaiController;
use App\Http\Controllers\Api\RumahController;
use App\Http\Controllers\Api\TentangController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TodosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
