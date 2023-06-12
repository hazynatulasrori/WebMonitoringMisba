<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSensor;
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
    return view('monitoring');
});

Route::get('/bacaph',[WebSensor::class, 'bacaph']);
Route::get('/bacaturbi',[WebSensor::class,'bacaturbi']);
Route::get('/status',[WebSensor::class,'status']);
Route::get('/data', [App\Http\Controllers\DataController::class, 'data'])->name('data');
