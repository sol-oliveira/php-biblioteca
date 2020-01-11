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

Route::group(['middleware'=>'auth'],function(){
  //Rotas LivroController
  Route::get('/admin/livros',['as'=>'admin.livros','uses'=>'Admin\LivroController@index']);
  Route::get('/admin/livros/adicionar',['as'=>'admin.livros.adicionar','uses'=>'Admin\LivroController@adicionar']);
  Route::post('/admin/livros/salvar',['as'=>'admin.livros.salvar','uses'=>'Admin\LivroController@salvar']);
  Route::get('/admin/livros/editar/{id}',['as'=>'admin.livros.editar','uses'=>'Admin\LivroController@editar']);
  Route::put('/admin/livros/atualizar/{id}',['as'=>'admin.livros.atualizar','uses'=>'Admin\LivroController@atualizar']);
  Route::get('/admin/livros/deletar/{id}',['as'=>'admin.livros.deletar','uses'=>'Admin\LivroController@deletar']); 
  Route::get('/admin/livros/disponibilizar/{id}',['as'=>'admin.livros.disponibilizar','uses'=>'Admin\LivroController@disponibilizar']); 
  Route::get('/admin/reservas/cancelar/{idreserva}',['as'=>'admin.reservas.cancelar','uses'=>'Admin\ReservaController@cancelar']);
 
  //Rotas UsuarioController
  Route::get('/admin/usuarios',['as'=>'admin.usuarios','uses'=>'Admin\UsuarioController@index']);
  Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar','uses'=>'Admin\UsuarioController@adicionar']);
  Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar','uses'=>'Admin\UsuarioController@salvar']);
  Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar','uses'=>'Admin\UsuarioController@editar']);
  Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar','uses'=>'Admin\UsuarioController@atualizar']);
  Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar','uses'=>'Admin\UsuarioController@deletar']);

   //Rotas ReservaController
   Route::get('/admin/reservas', ['as'=>'admin.reservas','uses'=>'Admin\ReservaController@index']);
   Route::get('/admin/reservas/salvar/{id}',['as'=>'admin.reservas.salvar','uses'=>'Admin\ReservaController@salvar']);
   Route::get('/admin/reservas/listar', ['as'=>'admin.reservas.listar','uses'=>'Admin\ReservaController@listar']);  
   Route::get('/admin/reservas/cancelar/{idreserva}',['as'=>'admin.reservas.cancelar','uses'=>'Admin\ReservaController@cancelar']);
   Route::get('/admin/reservas/finalizar/{idreserva}',['as'=>'admin.reservas.finalizar','uses'=>'Admin\ReservaController@finalizar']);

});
