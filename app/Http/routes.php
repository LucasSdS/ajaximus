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
//*/
//
//
//Route::get('contato', ["as" => "FormContato", "uses" => "ContatoController@index"]);
//Route::post('contato', ["as" => "EnviaContato", "uses" => "ContatoController@store"]);

Route::get('/', ["as" => "paginaInicial", "uses" => "PostController@index"]);
Route::put('/post', ["as" => "salvaPost", "uses" => "PostController@store"]);



//Route::get('/', function () {
//    return view('home');
//});

Route::get('contato', function () {
    return view('contato');
});

Route::get('viagens', function () {
    return view('viagens');
});

Route::get('sobre', function () {
    return view('sobre');
});

Route::get('teste', function () {
    return view('teste');
});

