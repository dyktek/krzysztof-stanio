<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => ['web']], function () {
// zapisanie adresu e-mail z index do bazy mailingowej
    Route::post('save', [
        'uses' => 'NewsletterController@store',
        'as' => 'email.save',
    ]);
    Route::post('/mailing', 'NewsletterController@store');
});

//index
Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'index',
]);

// dodawanie komentarzy widok
Route::get('/blog/addcomments/{id}', [
    'uses' => 'PostController@addcomments',
    'as' => 'blog.addcomments',
]);

Route::post('/blog/savecomments/{id}', [
    'uses' => 'PostController@store',
    'as' => 'blog.savecomments',
]);

//blog
Route::get('/blog', [
    'uses' => 'PostController@blog_index',
    'as' => 'blog',
]);

Route::get('blog/notka/{slug}', [
    'uses' => 'PostController@byEntry',
    'as' => 'posts',
]);

Route::get('blog/kategoria/{slug}', [
    'uses' => 'PostController@byCategory',
    'as' => 'posts.kategoria',
]);

Route::get('blog/archiwum/{year}/{day}', [
    'uses' => 'PostController@byDate',
    'as' => 'posts.archiwum',
]);

//absolwenci
Route::get('absolwenci', [
    'uses' => 'GraduatesController@index',
    'as' => 'absolwenci',
]);

Route::get('absolwent/{id}', [
    'uses' => 'GraduatesController@single_graduate',
    'as' => 'absolwent',
]);

//kurs
Route::get('kurs', function () {
    return view('szkolenia');
});

Route::get('kursy-programowania', function () {
    return view('szkolenia');
});

//formularz kontaktowy
Route::get('kontakt', [
    'as' => 'contact',
    'uses' => 'ContactFormController@index',
]);

//wyswietlanie filmów
Route::get('filmy', [
    'as' => 'movies',
    'uses' => 'MoviesController@index',
]);

Route::get('film/{slug}', [
    'as' => 'film',
    'uses' => 'MoviesController@single',
]);

Route::get('filmy/kategoria/{name}', [
    'uses' => 'MoviesController@byCategory',
    'as' => 'filmy.kategoria',
]);

Route::get('filmy/archiwum/{year}/{day}', [
    'uses' => 'MoviesController@byDate',
    'as' => 'filmy.archiwum',
]);

//formularz dostępowy dla userów
Route::get('dostep', [
    'as' => 'access',
    'uses' => 'MoviesController@access',
]);

Route::post('dostep', [
    'as' => 'save',
    'uses' => 'MoviesController@store',
]);

//wylogowanie
Route::get('logout', [
    'as' => 'logout',
    'uses' => 'PostController@getLogout',
]);

Auth::routes();
Route::get('/home', 'HomeController@index');

// routingi Voyagera
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// napisanie routingu voyagera - custom controller tworzy notke i wpis na forum

Route::post('admin/posts', [
    'as' => 'voyager.posts.store',
    'uses' => 'VoyagerController@store',
]);