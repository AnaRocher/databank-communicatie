<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/posts');
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentsController::class)->except(['show', 'index']);

/*
Route::get('/posts', [PostsController::class, 'index']);

Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);

Route::put('/posts/{id}', [PostsController::class, 'update']);
Route::delete('/posts/{id}', [PostsController::class, 'destroy']);

Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::get('/posts/{id}/edit', [PostsController::class, 'edit']);

Route::get('/comments/{id}/edit', [CommentsController::class, 'edit']);

*/