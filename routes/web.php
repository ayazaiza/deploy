<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::resource('/', 'DataController');

Route::get('/movies', 'moviesController@movies');

Route::get('/gomovies', 'moviesController@movies');

Route::get('/series', 'moviesController@series');

Route::get('/watchmovie/{slug}/{id}', 'moviewatchController@show');

Route::get('/watchmovie/{slug}/{id}/{uniqid}', 'moviewatchController@watch');


Route::get('/ajaxcall/{qu}', 'moviewatchController@search');

Route::any('/searchquery','moviesController@searchquery');

Route::get('/getby/{gen}','moviesController@genres');

Route::get('/getcoun/{cou}','moviesController@coun');

Route::get('/dmca','PagesController@dmca');




//Route::resource('/watchmovie', 'watchmovieController');




// Route::get('/', function () {
//     return view('welcome');
// });


