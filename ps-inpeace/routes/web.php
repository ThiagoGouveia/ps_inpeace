<?php

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

Route::get('/', function () {
    return redirect('/membros');
});

Route::group(['middleware'=>'web'],function(){
    Route::resource('/igrejas', '\App\Http\Controllers\IgrejasController');
    Route::resource('/membros', '\App\Http\Controllers\MembrosController');
});
