<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;



Route::get("posts", [ApiController::class, 'getPosts']);
Route::get("posts/{id}", [ApiController::class, 'getPost']);
Route::post("posts", [ApiController::class, 'createPost']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
