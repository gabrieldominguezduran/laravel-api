<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/news/{page}', [NewsController::class, 'index']);
Route::get('/single-news/{id}', [NewsController::class, 'show']);
Route::get('/category/{id}/{page}', [NewsController::class, 'showCategory']);
Route::get('/author/{id}', [NewsController::class, 'showAuthor']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
