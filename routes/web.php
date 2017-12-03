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




Route::get('/', 'HomeController@index')->name('index');


Route::post('/Registrar', 'HomeController@registrar');

Route::post('/logar', 'LogarController@logar');

Route::get('/logout', 'Auth\AuthController@getLogout'); 

Route::get('/InserirComentario' , 'HomeController@InserirComentario');

Route::post('Usuario/EditarCadastro', 'HomeController@EditarCadastro');
Route::post('Usuario/Configuracoes', 'HomeController@configuracoes');

Route::post('Usuario/editarComentario', 'HomeController@editarComentario');
Route::post('Usuario/ExcluirComentario', 'HomeController@ExcluirComentario');



Auth::routes();