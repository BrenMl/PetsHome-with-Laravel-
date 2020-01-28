<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/registroPaciente','paciente@mostrarFormulario');
Route::post('/registrar','paciente@guardarPaciente');

//Route::get('/login','Validacion@login');
//Route::post('/iniciarSesion','Validacion@iniciarSesion');
//Route::get('/cerrarSesion','Validacion@cerrarSesion');

Route::get('/consultaPaciente','paciente@consultar');

Route::get('/eliminarPaciente/{id}','paciente@eliminarPaciente');
//Route::post('/eliminar','paciente@eliminarPaciente');

Route::get('/Modificar','paciente@mostrarModi');
Route::post('/Modificar','paciente@bus');
Route::post('/Modificar/modificacion','paciente@modificacion');
