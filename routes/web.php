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
    return view('welcome');
});
/*Rutas Admiciones */

Route::get('/administracion' , 'App\Http\Controllers\AdmisionesController@Administracion');
Route::view('/administracion/NGrupo', 'NGrupo')->name('NuevoGrupo');