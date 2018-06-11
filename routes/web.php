<?php


Route::name('route_path')->get('/', 'PagesContoller@home');


Route::get('/about',[

    'as' =>'about_path',
    'uses'=>'PagesContoller@about'
]);