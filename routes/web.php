<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'list']);


Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/registration ', [AuthController::class, 'showRegistration']);
Route::post('/registration', [AuthController::class, 'handleRegistration']);
