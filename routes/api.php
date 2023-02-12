<?php

use App\Http\Controllers\CsvUserController;
use App\Http\Controllers\JsonUserController;
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


Route::get('/json', [JsonUserController::class, 'index']);
Route::get('/csv', [CsvUserController::class, 'index']);
