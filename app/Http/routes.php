<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('inicio');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['prefix' => 'Public'],function(){

    Route::get('/',[
        'uses' 	=> 'PublicController@index',
        'as'	=> 'Public.index'
    ]);

    Route::get('/book',[
        'uses' 	=> 'PublicController@book',
        'as'	=> 'Public.book'
    ]);

    Route::get('/mostrarB',[
        'uses' 	=> 'PublicController@mostrarB',
        'as'	=> 'Public.mostrarB'
    ]);

    Route::get('/inicioB',[
        'uses' 	=> 'PublicController@inicioB',
        'as'	=> 'Public.inicioB'
    ]);

    Route::get('/contenido',[
        'uses' 	=> 'PublicController@contenido',
        'as'	=> 'Public.contenido'
    ]);

    Route::get('/editor',[
        'uses' 	=> 'PublicController@editor',
        'as'	=> 'Public.editor'
    ]);

    Route::get('/inicioC',[
        'uses' 	=> 'PublicController@inicioC',
        'as'	=> 'Public.inicioC'
    ]);

    Route::get('/mostrarC',[
        'uses' 	=> 'PublicController@mostrarC',
        'as'	=> 'Public.mostrarC'
    ]);

    Route::get('/mostrarQ',[
        'uses' 	=> 'PublicController@mostrarQ',
        'as'	=> 'Public.mostrarQ'
    ]);

    Route::get('/questionario',[
        'uses' 	=> 'PublicController@questionario',
        'as'	=> 'Public.questionario'
    ]);
    Route::get('/inicioQ',[
        'uses' 	=> 'PublicController@inicioQ',
        'as'	=> 'Public.inicioQ'
    ]);
});