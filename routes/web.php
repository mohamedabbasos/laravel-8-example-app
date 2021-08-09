<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route::get('/photos', [PhotoController::class, 'index']);


Route::resource('/photos', PhotoController::class);

Route::post('/comments', [CommentController::class, 'store']);

Route::resource('/posts', PostController::class);
/**
 * GET          /posts/create                 PostController --> create
 * POST         /posts                        PostController --> store
 * GET          /posts                        PostController --> index
 * GET          /posts/{postId}               PostController --> show
 * GET          /posts/{postId}/edit          PostController --> edit
 * PUT/PATCH    /posts/{postId}/update        PostController --> update
 * DELETE       /posts/{postId}               PostController --> destory
 */




Route::get('/course', function () {
    echo "Hello, World!";
});

Route::get('/', function () {
    return view('welcome');
});
