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


/*Route::get('/nome',function(){
    return "Renan";
});

Route::get('/produto',function(){
    return "Feijão";
});

Route::get('/cliente',function(){
    return "Ian";
});

Route::get('/produtos',function(){
    return view ('produtos');
});


Route::get('/nome','ContatoController@retornaNome');

Route::get('produtos','ContatoController@listaProdutos');

Route::get('contatos','ContatoController@listaContatos');

*/

Route::get('contatos', 'ContatoController@index');
Route::get('contatos/create','ContatoController@create');
Route::post('contatos/create','ContatoController@store');
Route::get('contatos/{id}','ContatoController@edit');