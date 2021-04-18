<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashController;
use App\Http\Controllers\createController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\deleteController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', [dashController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/create', [createController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/update', [updateController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/delete', [deleteController::class, 'index']);



