<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get("/", [HomeController::class, 'index']);
Route::get("/car_driver/{car}/edit", [CarController::class, 'carDriverEdit']);
Route::post("/car_driver/{car}/edit", [CarController::class, 'carDriverUpdate'])->name('car_driver.update');
Route::delete("/car_driver/{car}/destroy", [CarController::class, 'carDriverDestroy'])->name('car_driver.destroy');

Route::resource("/car", CarController::class);
Route::resource("/user", UserController::class);
