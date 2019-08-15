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
Route::get('/', 'PessoaController@index');
Route::get('/form', 'PessoaController@cadastrar');
Route::post('/form', 'PessoaController@store');

Route::get('/editar/{id}', 'PessoaController@editar');
Route::put('/editar/{id}', 'PessoaController@update');

Route::get('/deletar/{id}', 'PessoaController@delete');