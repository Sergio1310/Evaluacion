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

Route::get('', 'UserController@login');
Route::get('/administrador/menu', 'UserController@menu');

Route::get('/alumno/menu', 'UserController@index');
Route::get('/alumno/pregunta', 'UserController@pregunta');
Route::get('/alumno/cedula', 'UserController@cedula');

Route::get('/administrador/usuarios', 'UserController@AdministradorUsuarios');
Route::get('/administrador/preguntas', 'UserController@AdministradorPreguntas');

Route::post('verificarLogin', 'LoginController@verificarUsuario')->name('verificar.login');

Route::get('administrador/TablaUsuarios', 'matriculasController@MostrarTablaUsuarios');

Route::get('insertarMatricula', 'matriculasController@insertarMatricula')->name('insert.Matricula');

Route::get('administrador/TablaPreguntas', 'preguntaUserController@MostrarTablaPreguntas');

Route::get('insertarPregunta', 'preguntaUserController@insertarPregunta')->name('insert.Pregunta');

Route::get('editarPregunta', 'preguntaUserController@editarPregunta')->name('editar.Pregunta');

Route::get('eliminarPregunta', 'preguntaUserController@eliminarPregunta')->name('eliminar.Pregunta');

Route::get('buscarPregunta', 'preguntaUserController@buscarPregunta')->name('buscar.Pregunta');