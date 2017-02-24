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

    Route::get('/mostrarQ',[
        'uses' 	=> 'PublicController@mostrarQ',
        'as'	=> 'Public.mostrarQ'
    ]);

    Route::get('/mostrarT',[
        'uses' 	=> 'PublicController@mostrarT',
        'as'	=> 'Public.mostrarT'
    ]);

    Route::get('/questionario',[
        'uses' 	=> 'PublicController@questionario',
        'as'	=> 'Public.questionario'
    ]);
    Route::get('/inicioQ',[
        'uses' 	=> 'PublicController@inicioQ',
        'as'	=> 'Public.inicioQ'
    ]);

    Route::get('/cuestionario/{id}',[
        'uses' 	=> 'PublicController@cuestionario',
        'as'	=> 'Public.cuestionario'
    ]);


    Route::delete('/deleteQuest/{id}',[
        'uses' 	=> 'PublicController@deleteQuest',
        'as'	=> 'Public.deleteQuest'
    ]);


    Route::get('/exportQuest/{id}',[
        'uses' 	=> 'ExportController@questionario',
        'as'	=> 'Public.exportQuest'
    ]);
});

Route::group(['prefix' => 'Libro'],function (){

    Route::get('/inicioB',[
        'uses' 	=> 'BookController@inicioB',
        'as'	=> 'Book.inicioB'
    ]);
    Route::get('/crear',[
        'uses' 	=> 'BookController@crear',
        'as'	=> 'Book.crear'
    ]);

    Route::get('/mostrarB',[
        'uses' 	=> 'BookController@mostrarB',
        'as'	=> 'Book.mostrarB'
    ]);


    Route::get('/libro/{id}',[
        'uses' 	=> 'BookController@libro',
        'as'	=> 'Book.libro'
    ]);

    Route::delete('/deleteBook/{id}',[
        'uses' 	=> 'BookController@deleteBook',
        'as'	=> 'Book.deleteBook'
    ]);

    Route::get('/exportBook/{id}',[
        'uses' 	=> 'ExportController@book',
        'as'	=> 'Book.exportBook'
    ]);

});

Route::group(['prefix' => 'Contenido'],function (){

    Route::get('/inicioC',[
        'uses' 	=> 'ContentController@inicioC',
        'as'	=> 'Contenido.inicioC'
    ]);

    Route::get('/creador',[
        'uses' 	=> 'ContentController@creador',
        'as'	=> 'Contenido.creador'
    ]);

    Route::get('/editor',[
        'uses' 	=> 'ContentController@editor',
        'as'	=> 'Contenido.editor'
    ]);
    //Muestra todos los contenidos
    Route::get('/mostrarC',[
        'uses' 	=> 'ContentController@mostrarC',
        'as'	=> 'Contenido.mostrarC'
    ]);
    //Muestra un solo contenido creado
    Route::get('/contenido/{id}',[
        'uses' 	=> 'ContentController@contenido',
        'as'	=> 'Contenido.contenido'
    ]);

    Route::delete('/deleteContent/{id}',[
        'uses' 	=> 'ContentController@deleteContent',
        'as'	=> 'Contenido.deleteContent'
    ]);

    Route::get('/exportContent/{id}',[
        'uses' 	=> 'ExportController@contenido',
        'as'	=> 'Contenido.exportContent'
    ]);

    Route::get('/editContenido/{id}',[
        'uses' 	=> 'ContentController@editContenido',
        'as'	=> 'Contenido.editContenido'
    ]);

    Route::post('/update.contenido/{id}', [
        'uses' => 'UpdateController@contenido',
        'as'	=> 'Update.contenido'
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


// Rutas necesarias para el traspaso de usuarios

  Route::group(['prefix' => 'raim', 'middleware' => 'api'],function(){

    Route::post('/session_create',[
      'uses' 	=> 'raimController@session_create',
      'as'	=> 'raim.session_create'
    ]);

    Route::post('/session_update',[
      'uses' 	=> 'raimController@session_update',
      'as'	=> 'raim.session_update'
    ]);

    Route::post('/session_delete',[
      'uses' 	=> 'raimController@session_delete',
      'as'	=> 'raim.session_delete'
    ]);

  });
