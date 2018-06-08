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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'Auth\UserController@index');
Auth::routes();
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');
Route::get('/', 'CandidateController@index');
Route::get('/search','CandidateController@search');
Route::get('/addCandidate', 'CandidateController@create');
Route::get('/save', 'CandidateController@save');
Route::get('/sort/{sortby}/{order}','CandidateController@sort');
Route::get('/show/{id}', 'CandidateController@show');
Route::get('/update', 'CandidateController@update');

Route::get('/status', 'StatusController@index');
Route::get('/newStatus', 'StatusController@new');
Route::get('/createStatus', 'StatusController@create');
Route::get('/edit/{id}', 'StatusController@edit');
Route::get('/delete/{id}', 'StatusController@delete');
Route::get('/updateStatus/{id}', 'StatusController@update');

Route::get('/test','TestController@index');
