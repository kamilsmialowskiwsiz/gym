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

//homepage
Route::get('/','SiteController@index');
Route::post('/','SiteController@store');

//sending emails
Route::post('/sendemail','SiteController@sendEmail');

//admin panel
Route::group(array('before' => 'auth'), function() 
{
    Route::get('dashboard','DashboardController@dashboard');
    Route::get('dashboard/create','DashboardController@showCreate');
    Route::get('dashboard/modify','DashboardController@modify');
    Route::get('dashboard/modify/{id}/edit','DashboardController@edit');
    Route::patch('dashboard/{id}','DashboardController@update');
    Route::delete('dashboard/{id}','DashboardController@destroy');
});

Route::group(['prefix' => 'dashboard'], function () {
    Auth::routes();
});
