<?php

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

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('contratos', 'ContratosController');

Route::get('upload','ExcelController@upload' );
Route::post('ImportContratos', 'ExcelController@ImportContratos');