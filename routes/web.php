<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);

Route::post('/contato',['uses'=>'ContatoController@criar']);

Route::put('/contato',['uses'=>'ContatoController@editar']);


Route::group(['middleware'=>'auth'],function(){
  
  Route::get('/admin/livros',['as'=>'admin.livros','uses'=>'Admin\LivroController@index']);
  Route::get('/admin/livros/adicionar',['as'=>'admin.livros.adicionar','uses'=>'Admin\LivroController@adicionar']);
  Route::post('/admin/livros/salvar',['as'=>'admin.livros.salvar','uses'=>'Admin\LivroController@salvar']);
  Route::get('/admin/livros/editar/{id}',['as'=>'admin.livros.editar','uses'=>'Admin\LivroController@editar']);
  Route::put('/admin/livros/atualizar/{id}',['as'=>'admin.livros.atualizar','uses'=>'Admin\LivroController@atualizar']);
  Route::get('/admin/livros/deletar/{id}',['as'=>'admin.livros.deletar','uses'=>'Admin\LivroController@deletar']);

});
