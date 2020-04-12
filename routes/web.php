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

//pacientes
Route::get('/crear-paciente','PacienteController@createPaciente')->name('createPaciente')->middleware('auth');

Route::post('/guardar-paciente','PacienteController@savePaciente')->name('savePaciente')->middleware('auth');
