<?php

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

Auth::routes();

// Permet de bloque l'enregistrement de nouvelle personne
// Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

Route::get('/admintasks', [App\Http\Controllers\TaskController::class, 'index'])->name('/admintasks');

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');
