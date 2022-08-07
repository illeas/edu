<?php

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

Route::get('student', [App\Http\Controllers\StudentController::class, 'student']);
Route::post('register', [App\Http\Controllers\StudentController::class, 'register']);

Route::get('getFields', [App\Http\Controllers\FieldController::class, 'getFields']);
Route::post('addFields', [App\Http\Controllers\FieldController::class, 'addFields']);
