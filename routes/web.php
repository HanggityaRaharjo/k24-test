<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts.main');
// });

// Route::get('')





Route::get('/', [MainController::class, 'main']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'validHandler']);
Route::post('/store', [RegisterController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);


Route::get('/user', [UserController::class, 'user']);



Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update']);


Route::get('/datamember', [UserController::class, 'datamember']);
Route::get('/admin/create', [DashboardController::class, 'create']);
Route::get('/{id}/edit', [DashboardController::class, 'edit']);
Route::delete('{id}/delete', [DashboardController::class, 'destroy']);

Route::get('/admin/datajson', [DashboardController::class, 'jsondata']);








