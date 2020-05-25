<?php
    Route::get('/', 'HomeController@index');
    Route::get('/advantage/item/{id}', 'AdvantageItemController@show');
    Route::get('/news/item/{id}', 'NewsController@show');
    Route::get('/contacts', 'ContactController@index');
    Route::get('/calculator', function(){
        return view('calculator');
    });

    Route::get('/documents', function(){
        $docs = \App\Document::all();
        return view('documents', ['docs' => $docs]);
    });
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::post('/order', 'OrderMailController@order');
    Route::post('/send', 'ContactMailController@send');
    
    Auth::routes();