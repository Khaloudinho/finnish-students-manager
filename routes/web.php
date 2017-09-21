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

// Route related to adding a module, a class or a student
Route::get('/add', ['as' => 'add', 'uses' => 'AddController@index']);
Route::get('/add/module', ['as' => 'add/module', 'uses' => 'AddController@createModule']);
Route::post('/add/module', ['as' => 'add/module', 'uses' => 'AddController@storeModule']);
Route::get('/add/class', ['as' => 'add/class', 'uses' => 'AddController@createClass']);
Route::post('/add/class', ['as' => 'add/class', 'uses' => 'AddController@storeClass']);
Route::get('/add/student', ['as' => 'add/student', 'uses' => 'AddController@createStudent']);
Route::post('/add/student', ['as' => 'add/student', 'uses' => 'AddController@storeStudent']);
//Route::get('/add/grade', ['as' => 'add/grade', 'uses' => 'AddController@addGrade']);

// Routes related to grades
Route::get('/grades', ['as' => 'grades', 'uses' => 'GradesController@showGrades']);
Route::get('/grades/update/{id}', ['as' => 'grades/update/{id}', 'uses' => 'GradesController@edit']);
Route::post('/grades/update/{id}', 'GradesController@update');

// Routes related to queries
Route::get('/queries', ['as' => 'queries', 'uses' => 'QueriesController@index']);
Route::get('queries/q1', ['as' => 'queries/q1', 'uses' => 'QueriesController@printQ1']);
Route::get('queries/q2', ['as' => 'queries/q2', 'uses' => 'QueriesController@printQ2']);
Route::get('queries/q3', ['as' => 'queries/q3', 'uses' => 'QueriesController@printQ3']);
Route::get('queries/q4', ['as' => 'queries/q4', 'uses' => 'QueriesController@printQ4']);