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

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/index2', 'HomeController@index2')->name('index2');

Route::get('/home', 'HomeController@indexHome')->name('home');
Route::get('/home2', 'HomeController@indexHome2')->name('home2');

Route::group(['middleware' => 'auth'], function () {
	Route::name('usuariosLista')->get('/usuarios', 'UserController@index');
	Route::name('usuarioCrear')->get('/usuarionuevo', 'UserController@create');
	Route::name('usuarioCrearPost')->post('/usuario/nuevo', 'UserController@store');
	Route::name('usuarioEditar')->get('/usuarioeditar/{id}', 'UserController@edit');
	Route::name('usuarioEditarPost')->post('/usuario/editar/{id}', 'UserController@update');
	Route::name('consultaCrear')->post('/guardarconsulta', 'ConsultaController@guardar');
	Route::name('consultaExito')->post('/consultaExito', 'ConsultaController@exito');
	
});

// Route::get('/', 'MessageController@index');
// Route::get('/mensajes', 'MessageController@index')->name('lista_mensajes');
// Route::group(['prefix' => 'mensajes'], function () {
// 		Route::get('/drafts','MessageController@drafts')
// 		->name('list_drafts')
// 		->middleware('auth');

// 		Route::get('/show/{id}','MessageController@show')
// 		->name('show_msg');

// 		Route::get('/create','MessageController@create')
// 		->name('create_msg')
// 		->middleware('can:create-message');

// 		Route::post('/create','MessageController@store')
// 		->name('store_msg')
// 		->middleware('can:create-message');

// 		Route::get('/edit/{message}','MessageController@edit')
// 		->name('edit_msg')
// 		->middleware('can:update-message, message');

// 		Route::get('/edit/{message}','MessageController@update')
// 		->name('update_msg')
// 		->middleware('can:update-message, message');

// 		Route::get('/publish/{message}','MessageController@publish')
// 		->name('publish_msg')
// 		->middleware('can:update-message');

// 	});
