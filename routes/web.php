<?php

use App\Mail\ContactMessageCreated;

Route::name('route_path')->get('/', 'PagesContoller@home');


Route::get('/test-email', function(){

    return new ContactMessageCreated('Boubacar Elvally', 'elvally@hotmail.fr', 'laravvel est coool');
});


Route::get('/about',[

    'as' =>'about_path',
    'uses'=>'PagesContoller@about'
]);


Route::get('/contact',[

    'as' =>'contact_path',
    'uses'=>'ContactsController@create'
]);

Route::post('/contact',[

    'as' =>'contact_path',
    'uses'=>'ContactsController@store'
]);