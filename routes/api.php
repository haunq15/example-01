<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/posts', [PostController::class, 'index']);      // list
Route::get('/v1/posts/{id}', [PostController::class, 'show']);  // detail
Route::post('/v1/posts', [PostController::class, 'store']);     // create
Route::put('/v1/posts/{id}', [PostController::class, 'update']); // update
Route::delete('/v1/posts/{id}', [PostController::class, 'destroy']); // delete
