<?php
use App\Usuario;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');

/*login*/
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


/*Administradores*/
Route::group(['middleware'=>'admin'], function () {

	Route::get('bienvenida', 'BienvenidaController@index');

	Route::get('usuarios','UsuarioController@index');
	Route::get('actualizar-usuarios','UsuarioController@index2');
	Route::post('registrar-usuario', 'UsuarioController@guardar');
	Route::post('formconsultar', 'UsuarioController@consultar');
	Route::post('actualizar-usuario', 'UsuarioController@actualizar');
	Route::get('backup','UsuarioController@backup');



});

/*Usuarios Estrategicos*/
Route::group(['middleware'=>'estrategico'], function () {

	Route::get('bienvenida', 'BienvenidaController@index');

});



/*Usuarios Tacticos*/
Route::group(['middleware'=>'tactico'], function () {

	Route::get('bienvenida', 'BienvenidaController@index');
});



/*Temporal*/

Route::get('prueba', function(){

	DB::insert('insert into usuario (id,usuario,password ,contrasena ,rol) values (?, ?,?,?, ?)', [3,'nestor', Hash::make('nestor'),'nestor',3]);
	
});



