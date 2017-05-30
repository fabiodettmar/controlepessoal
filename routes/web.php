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


Route::get('/usuarios', 'UsuarioController@getIndex');
Route::any('usuarios/listar_todos', 'UsuarioController@listarTodos');
Route::get('usuarios/novo', 'UsuarioController@novo');
Route::post('usuarios/adiciona', 'UsuarioController@adiciona');
Route::get('usuarios/remove/{id}', 'UsuarioController@remove');
Route::get('usuarios/mostra/{id}', 'UsuarioController@mostra');
Route::post('usuarios/edita/{id}', 'UsuarioController@edita');

Route::get('/categorias', 'CategoriaController@getIndex');
Route::any('categorias/listar_todos', 'CategoriaController@ListarTodos');
Route::get('categorias/novo', 'CategoriaController@novo');
Route::post('categorias/adiciona', 'CategoriaController@adiciona');
Route::get('categorias/remove/{id}', 'CategoriaController@remove');
Route::get('categorias/mostra/{id}', 'CategoriaController@mostra');
Route::post('categorias/edita/{id}', 'CategoriaController@edita');

Route::get('/contas', 'ContaController@getIndex');
Route::any('contas/listar_todos', 'ContaController@ListarTodos');
Route::get('contas/novo', 'ContaController@novo');
Route::post('contas/adiciona', 'ContaController@adiciona');
Route::get('contas/remove/{id}', 'ContaController@remove');
Route::get('contas/mostra/{id}', 'ContaController@mostra');
Route::post('contas/edita/{id}', 'ContaController@edita');

Route::get('/tipos_registro', 'TipoRegistroController@getIndex');
Route::any('tipos_registro/listar_todos', 'TipoRegistroController@ListarTodos');
Route::get('tipos_registro/novo', 'TipoRegistroController@novo');
Route::post('tipos_registro/adiciona', 'TipoRegistroController@adiciona');
Route::get('tipos_registro/remove/{id}', 'TipoRegistroController@remove');
Route::get('tipos_registro/mostra/{id}', 'TipoRegistroController@mostra');
Route::post('tipos_registro/edita/{id}', 'TipoRegistroController@edita');

Route::get('/tipos_responsavel', 'TipoResponsavelController@getIndex');
Route::any('tipos_responsavel/listar_todos', 'TipoResponsavelController@ListarTodos');
Route::get('tipos_responsavel/novo', 'TipoResponsavelController@novo');
Route::post('tipos_responsavel/adiciona', 'TipoResponsavelController@adiciona');
Route::get('tipos_responsavel/remove/{id}', 'TipoResponsavelController@remove');
Route::get('tipos_responsavel/mostra/{id}', 'TipoResponsavelController@mostra');
Route::post('tipos_responsavel/edita/{id}', 'TipoResponsavelController@edita');

Route::get('/status', 'StatusController@getIndex');
Route::any('status/listar_todos', 'StatusController@ListarTodos');
Route::get('status/novo', 'StatusController@novo');
Route::post('status/adiciona', 'StatusController@adiciona');
Route::get('status/remove/{id}', 'StatusController@remove');
Route::get('status/mostra/{id}', 'StatusController@mostra');
Route::post('status/edita/{id}', 'StatusController@edita');

Route::get('/responsaveis', 'ResponsavelController@getIndex');
Route::any('responsaveis/listar_todos', 'ResponsavelController@ListarTodos');
Route::get('responsaveis/novo', 'ResponsavelController@novo');
Route::post('responsaveis/adiciona', 'ResponsavelController@adiciona');
Route::get('responsaveis/remove/{id}', 'ResponsavelController@remove');
Route::get('responsaveis/mostra/{id}', 'ResponsavelController@mostra');
Route::post('responsaveis/edita/{id}', 'ResponsavelController@edita');

Route::get('/registros', 'RegistroController@getIndex');
Route::any('registros/listar_todos', 'RegistroController@ListarTodos');
Route::any('registros/listar_ultimos', 'RegistroController@ListarUltimos');
Route::get('registros/novo', 'RegistroController@novo');
Route::post('registros/adiciona', 'RegistroController@adiciona');
Route::get('registros/remove/{id}', 'RegistroController@remove');
Route::get('registros/mostra/{id}', 'RegistroController@mostra');
Route::put('registros/edita/{id}', 'RegistroController@edita');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/', 'HomeController@index');

Auth::routes();
