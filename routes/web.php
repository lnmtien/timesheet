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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], 
function() 
{
    Auth::routes();
	Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile/detail/{profile}', 'ProfileController@update')->name('profile.update');
    Route::post('/profile/passwd/{profile}', 'ProfileController@password')->name('profile.password');
    
    Route::get('/groups', 'GroupController@index')->name('groups');
    
    Route::get('/projects', 'ProjectController@index')->name('projects');
    Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
    Route::post('/projects/create', 'ProjectController@store')->name('projects.store');
    
    Route::get('/jobs', 'JobController@index')->name('jobs');
    Route::get('/jobs/create', 'JobController@create')->name('jobs.create');
    Route::post('/jobs/create', 'JobController@store')->name('jobs.store');
});