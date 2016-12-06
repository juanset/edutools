<?php
Route::get('/', function () {
    return view('inicio');
});

Route::resource('log','LogController');
Route::resource('store','UsersController');

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
    Route::get('/libro/{id}',[
        'uses' 	=> 'PublicController@libro',
        'as'	=> 'Public.libro'
    ]);
    Route::get('/cuestionario/{id}',[
        'uses' 	=> 'PublicController@cuestionario',
        'as'	=> 'Public.cuestionario'
    ]);

    Route::get('/kontenido/{id}',[
        'uses' 	=> 'PublicController@kontenido',
        'as'	=> 'Public.kontenido'
    ]);
});

Route::get('/flogin', [
    'uses' => 'UsersController@flogin',
    'as'	=> 'flogin'
]);

Route::get('/fregistry', [
    'uses' => 'UsersController@fregistry',
    'as'	=> 'fregistry'
]);

Route::post('/store.libro', [
    'uses' => 'storeController@libro',
    'as'	=> 'store.libro'
]);

Route::post('/store.contenido', [
    'uses' => 'storeController@contenido',
    'as'	=> 'store.contenido'
]);


Route::post('/store.pregunta', [
    'uses' => 'storeController@pregunta',
    'as'	=> 'store.pregunta'
]);
Route::get('/logout', [
    'uses' => 'UsersController@logout',
    'as'	=> 'logout'
]);