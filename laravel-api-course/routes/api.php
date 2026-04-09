<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\V1\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user(); 
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return ["message" => "Hello World"];
});

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posrs.show');

Route::prefix('v1')->group(function () {
    Route::apiResource('/posts', PostController::class);
}); 

