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
    // return view('welcome');
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('paciente', 'PacienteController');

Route::resource('servicio', 'ServicioController');

Route::resource('pago', 'PagoController');


Route::resource('consulta', 'ConsultaController');
Route::post('consulta/buscarPaciente', ['as' => 'buscarPaciente', 'uses' => 'ConsultaController@buscarPaciente']);
Route::post('consulta/{id}/buscarPaciente', ['as' => 'buscarPaciente', 'uses' => 'ConsultaController@buscarPaciente']);

Route::post('consulta/buscarServicio', ['as' => 'buscarServicio', 'uses' => 'ConsultaController@buscarServicio']);
Route::post('consulta/{id}/buscarServicio', ['as' => 'buscarServicio', 'uses' => 'ConsultaController@buscarServicio']);

Route::post('consulta/historial', ['as' => 'historial', 'uses' => 'ConsultaController@historial']);



Route::resource('cita','CitaController');
Route::post('cita/buscarPaciente', ['as' => 'buscarPaciente', 'uses' => 'CitaController@buscarPaciente']);
Route::post('cita/{id}/buscarPaciente', ['as' => 'buscarPaciente', 'uses' => 'CitaController@buscarPaciente']);


Route::resource('personal', 'PersonalController');


Route::resource('configuracion', 'ConfiguracionController');
