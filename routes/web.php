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
Route::get('/fixtures', 'FixtureController@viewFixtures')->name('fixtures');
Route::get('/players', 'PlayerController@viewPlayers')->name('players');
Route::get('/teampage/createteam','TeamController@showCreateTeamPage')->name('createteam');
Route::get('/teampage/editteam/{id}','TeamController@showOneTeam')->name('editteam');
Route::get('fixture/createfixture','FixtureController@showCreateFixture')->name('createfixture');
Route::get('players/createplayer', 'PlayerController@showCreatePlayer')->name('createplayer');

Route::post('/addteam', array('uses' => 'TeamController@createTeam'));
Route::post('/addfixture', array('uses' => 'FixtureController@createFixture'));
Route::post('/addplayer', array('uses' => 'PlayerController@createPlayer'));
Route::post('/updateteam', array('uses' => 'TeamController@updateTeam'));

Route::post('/deleteteam/{id}','TeamController@deleteTeams');



Auth::routes();
