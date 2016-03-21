<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/hola',function(){
    return Auth::user()->personal;
});
Route::get('/', 'inicioController@inicio');
Route::get('/nosotros', 'inicioController@nosotros');
Route::get('/contacto', 'inicioController@contacto');
Route::match(array("GET", "POST"), '/acceso', 'inicioController@acceso');
Route::get('/registrarse', 'inicioController@registrarse');
Route::group(['before'=>'auth'], function(){//Aqui va lo de usuario comun o maestro
    Route::group(['before'=>'maestro'], function(){//aqui va lo de administradores
        Route::get('/administrativo', 'administrativoController@inicio');
    });
    Route::get('/profesores', 'administrativoController@profesores');
    Route::match(array("GET", "POST"), '/registrarProfesor', 'administrativoController@registrarProfesor');
    Route::match(array("GET", "POST"), '/modificarProfesor', 'administrativoController@modificarProfesor');
    Route::match(array("GET", "POST"), '/infoProfesorModificar', 'administrativoController@infoProfesorModificar');
    Route::match(array("GET", "POST"), '/eliminarProfesor', 'administrativoController@eliminarProfesor');
    Route::match(array("GET", "POST"), '/infoProfesorEliminar', 'administrativoController@infoProfesorEliminar');
    Route::get('/alumnos', 'administrativoController@alumnos');
    Route::match(array("GET", "POST"), '/registrarAlumno', 'administrativoController@registrarAlumno');
    Route::get('/modificarAlumno', 'administrativoController@modificarAlumno');
    Route::get('/eliminarAlumno', 'administrativoController@eliminarAlumno');
    Route::get('/usuarios', 'administrativoController@usuarios');
    Route::match(array("GET", "POST"), '/registrarUsuario', 'administrativoController@registrarUsuario');
    Route::get('/modificarUsuario', 'administrativoController@modificarUsuario');
    Route::get('/eliminarUsuario', 'administrativoController@eliminarUsuario');
    Route::get('/inventario', 'administrativoController@inventario');
    Route::get('/directorios', 'administrativoController@directorios');
});