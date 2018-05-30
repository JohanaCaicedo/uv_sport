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
})->name('welcome');
Route::get('IniciarSesion', function () {
    return view('IniciarSesion');
})->name('IniciarSesion');

Route::get('gestionequipo', function () {
    return view('gestionequipo');
})->name('gestionequipo');
Route::get('gestionpartido', function () {
    return view('gestionpartido');
})->name('gestionpartido');
Route::get('gestiontorneo', function () {
    return view('gestiontorneo');
})->name('gestiontorneo');

Route::get('login', function () {
    return view('auth\login');
})->name('login');


Route::post('login', 'Auth\LoginController@postLogin')->name('login');
Route::post('import-excel', 'ExcelController@importIntegrantes')->name('import-excel');
route::resource('integrante','IntegranteController');
route::resource('deporte','DeporteController');
route::resource('equipo','EquipoController');
route::resource('partido','PartidoController');
route::resource('torneo','TorneoController');
route::resource('equipo_integrantes','EquipoIntegranteController');
route::resource('torneo_partidos','TorneoEquipoController');