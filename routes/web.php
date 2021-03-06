<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [HomeController::class,'index']);

Route::post('/contact',[ContactController::class,'contact'])->name('contact');

Route::post('/reservation',[ReservationController::class,'ReservationTable'])->name('reservation');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
