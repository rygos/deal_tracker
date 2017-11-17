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
Route::get('reports/deals_per_month/{year?}/{month?}', 'Reports\DealsPerMonthController@index');

Route::get('reports/updated_deals_per_week/', 'Reports\UpdatedDealsPerWeekController@index');


//Search Route
Route::get('search/{term?}', 'SearchController@search');

Route::get('/documentation', function()
{
    return View::make('documentation');
});