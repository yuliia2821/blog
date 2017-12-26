<?php

\Illuminate\Support\Facades\Route::group(['middleware'=>['web']], function (){
    \Illuminate\Support\Facades\Route::get('auth/login', 'Auth\AuthController@getLogin');
    \Illuminate\Support\Facades\Route::post('auth/login', 'Auth\AuthController@postLogin');
    \Illuminate\Support\Facades\Route::get('auth/logout', 'Auth\AuthController@getLogout');

    \Illuminate\Support\Facades\Route::get('auth/register', 'Auth\AuthController@getRegister');
    \Illuminate\Support\Facades\Route::post('auth/register', 'Auth\AuthController@postRegister');
    \Illuminate\Support\Facades\Route::get('','PagesController@getIndex');

    \Illuminate\Support\Facades\Route::get('about','PagesController@getAbout');

    \Illuminate\Support\Facades\Route::get('contact','PagesController@getContact');

    \Illuminate\Support\Facades\Route::post('posts/create','PostController@store');

    \Illuminate\Support\Facades\Route::resource('posts','PostController');
    \Illuminate\Support\Facades\Route::get('auth/register', 'Auth\AuthController@getRegister');

});