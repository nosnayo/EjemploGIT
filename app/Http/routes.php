<?php

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

/*tipos de rutas
- GET, POST, PUT, DELETE, RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
    //return view('test.index');
    // ver: http://localhost:8090/laravel/c1/public/
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users', 'UsersController');//foto
});

/*grupo de rutas*/
/*ej: http://localhost:8090/laravel/c1/public/articles/view/pedro*/
Route::group(['prefix' => 'articles'], function(){

	/*Route::get('view/{article?}', function($article = "Vacio"){
		echo "El articulo que has colocado es: " . $article;
	});*/

	/*uso de controlador*/
	/*ej: http://localhost:8090/laravel/c1/public/articles/view/3*/
	Route::get('view/{id}', [
		'uses' => 'TestController@view',
		'as' => 'articlesView'
	]);
});

