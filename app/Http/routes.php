<?php




/*
    Routes for every page
    Used middleware 'web' - for this website it has no special meaning, it's completely irrelevant
*/

Route::group(['middleware' => 'web'], function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'MainController@home'
    ]);

    Route::get('/about', [
        'as' => 'about',
        'uses' => 'MainController@about'
    ]);

    Route::get('/contact', [
        'as' => 'contact',
        'uses' => 'MainController@contact'
    ]);

    Route::get('/event/{id}', [
        'as' => 'event',
        'uses' => 'MainController@getEvent'
    ]);

    Route::get('/settings/lang/{id}', [
        'as' => 'changeLanguage',
        'uses' => 'MainController@changeLanguage'
    ]);

    Route::post('/sendemail', [
        'as' => 'sendEmail',
        'uses' => 'MainController@sendEmail'
    ]);

});



