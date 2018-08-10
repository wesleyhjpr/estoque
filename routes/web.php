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
Auth::routes();
/*
Route::get('/', function(){
    return '<h1>Primeira lógica com Laravel.</h1>';
});*/

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostrar')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::match(array('GET', 'POST'), '/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('produtos/{produto}/editar', 'ProdutoController@editar');
Route::patch('produtos/{produto}', 'ProdutoController@atualizar'); 

Route::get('/produtos/json', 'ProdutoController@listaJson');   

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::resource([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/