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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("control-vehicular","ControlVehicular\ControlVehicularController");
Route::post('ConfirmarVehiculo',['as'=>'modificarVehiculo','uses'=>'ControlVehicular\ControlVehicularController@update']);
Route::resource("bitacora","ControlVehicular\BitacoraController");
Route::post('bitacoraEntrada',['as'=>'bitacoraEntrada','uses'=>'ControlVehicular\BitacoraController@update']);
Route::post('agregarFolio',['as'=>'agregarFolio','uses'=>'ControlVehicular\BitacoraController@guardarFolio']);
Route::resource("usuarios","Usuarios\UsuarioController");
Route::resource("empleados","Usuarios\EmpleadoController");

//Filtros de busqueda
Route::post('buscar_bitacora', 'ControlVehicular\BitacoraController@buscar_bitacora');


//Datatables
Route::get('bitacoras/get_datatable','ControlVehicular\BitacoraController@get_datatable');
