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

Route::get('/', 'App\Http\Controllers\contatoController@index');

Route::get('/cadastrar', function()
{
	 return view('cadastrar');
});

Route::get('/pesquisa/query={pesquisa}','App\Http\Controllers\contatoController@pesquisa');

Route::get('/destruir/{id}','App\Http\Controllers\contatoController@destroy');

Route::post('/cadastrar/inserir', 'App\Http\Controllers\contatoController@store');

