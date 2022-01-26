<?php

use App\Http\Controllers\dev;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\device_controller;
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
Route::namespace('')->group(function() {
    Route::resource('dev', dev::class,);
    route::post('/Search',[dev::class,'search'])->name('dev.search');
});
Route::get('{ffffff}', function() {
 return redirect ('dev');
    });



