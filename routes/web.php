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
Route::get('/customer', 'CustomerController@index');
Route::get('/createCustomer', 'CustomerController@createCustomer');

Route::get('/reports','ReportController@index');
Route::get('/createReport','ReportController@createReport');

Route::get('/products', 'ProductController@index');
Route::get('/createProduct', 'ProductController@createProduct');

Route::get('/order','OrderController@index');
Route::get('/createOrder','OrderController@createOrder');

Route::get('/user','UserController@index');
Route::get('/createUser','UserController@createUser');





Route::get('/', 'Auth\LoginController@index');

Route::get('/index', 'MainController@index');
Route::get('/editAppointment/{id}','MainController@editApm');
Route::get('/updateAppointment/{id}','MainController@updateApm');

Route::post('/login','MainController@login');
Route::get('/logout','MainController@logout');


Route::get('/search','CandidateController@search');
Route::get('/addCandidate', 'CandidateController@create');
Route::get('/save', 'CandidateController@save');
Route::get('/sort/{sortby}/{order}','CandidateController@sort');
Route::get('/show/{id}', 'CandidateController@show');
Route::get('/update', 'CandidateController@update');
Route::get('/updateIden/{id}','CandidateController@updateIden');


Route::get('/newStatus', 'StatusController@new');
Route::get('/createStatus', 'StatusController@create');
Route::get('/edit/{id}', 'StatusController@edit');
Route::get('/delete/{id}', 'StatusController@delete');
Route::get('/updateStatus/{id}', 'StatusController@update');

Route::get('/addTest','TestController@addTest');
Route::get('/createTest','TestController@create');
Route::get('/showTest/{id}','TestController@view');
Route::get('/updateTest/{id}','TestController@update');
Route::get('/deleteTest/{id}','TestController@delete');


Route::get('/saveApm','AppointmentController@save');
Route::get('/delApm/{id}','AppointmentController@delete');
Route::get('/editApm/{id}','AppointmentController@edit');
Route::get('/updateApm/{id}','AppointmentController@update');

Route::get('/newApm','AppointmentController@newApm');
