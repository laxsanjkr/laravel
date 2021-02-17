<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->group(function () {
//     Route::resource('task', TaskController::class);
// });

Route::prefix('/task')->group( function() {
    Route::post('/store', [TaskController::class,'store']);
    Route::put('/{id}', [TaskController::class,'update']);
    Route::delete('/{id}', [TaskController::class,'destroy']);
    }
);