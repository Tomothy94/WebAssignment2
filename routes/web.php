<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
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




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teampage', 'TeamController@showTeams')->name('teampage');


Route::get('/fixture', 'FixtureController@viewFixtures')->name('fixtures');



Route::get('/players', 'PlayerController@showPlayers')->name('players');



Route::get('/teampage/createteam', function()
           {
    return View::make('createteam');
});
Auth::routes();
