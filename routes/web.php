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

/* Website Homepage */
Route::get('/', 'HomeController@showWelcome')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teampage', 'TeamController@showTeamPage')->name('teampage');

Route::get('/fixtures', 'TeamController@viewFixtures')->name('fixtures');

Route::get('/players', function()
{
    return View::make('players');
});

Route::get('/teampage/createteam', function()
           {
    return View::make('createteam');
});