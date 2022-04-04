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

Route::get('/index', function () {
    return view('index');
});

Route::get('/consultar','ProductoController@consultar', function () {
    return view('consultar');
});

Route::get('/registrar','ProductoController@registrar', function () {
    return view('registrar');
});

Route::get('/eliminar','ProductoController@eliminar', function () {
    return view('eliminar');
});

Route::get('/actualizar','ProductoController@actualizar', function () {
    return view('actualizar');
});

//guardar Formulario
Route::post('guardarFormulario','ProductoController@guardarFormulario');