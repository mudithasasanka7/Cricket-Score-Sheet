<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Group_A_Controller;
use App\Http\Controllers\Group_B_Controller;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckController;

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

Route::get('/', function () {
    return view('Score.register');
});

Route::resource('sheet',SheetController::class);
Route::resource('onlinescore',WebController::class);
Route::resource('register',Group_A_Controller::class);
Route::resource('b_register',Group_B_Controller::class);
Route::resource('login',LoginController::class);
Route::resource('check',CheckController::class);