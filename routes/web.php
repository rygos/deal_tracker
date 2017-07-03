<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('/access_denied', function(){
   return View::make('errors.access_denied');
});

Route::get('/import', 'ImportController@index');
Route::post('/import', 'ImportController@import');

//Deals Routes
Route::get('/deals', 'DealController@index');
Route::get('/deals/add', 'DealController@create');
Route::post('/deals/add', 'DealController@store');
Route::get('/deals/{deal_id}/edit', 'DealController@edit');
Route::post('/deals/{deal_id}/edit', 'DealController@update');
Route::get('/deal/{deal_id}', 'DealController@show');

//Report Routes
Route::get('reports', 'Reports\CockpitController@index');


Route::get('/charts', function()
{
    return View::make('mcharts');
});

Route::get('/tables', function()
{
    return View::make('table');
});

Route::get('/forms', function()
{
    return View::make('form');
});

Route::get('/grid', function()
{
    return View::make('grid');
});

Route::get('/buttons', function()
{
    return View::make('buttons');
});


Route::get('/icons', function()
{
    return View::make('icons');
});

Route::get('/panels', function()
{
    return View::make('panel');
});

Route::get('/typography', function()
{
    return View::make('typography');
});

Route::get('/notifications', function()
{
    return View::make('notifications');
});

Route::get('/blank', function()
{
    return View::make('blank');
});

Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/documentation', function()
{
    return View::make('documentation');
});