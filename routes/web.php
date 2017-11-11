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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',  array('as'=>'game.create', 'uses'=> 'GamesController@create'));
Route::post('game/strore',  array('as'=>'game.store', 'uses'=> 'GamesController@store'));
Route::get('round/create/{id}',  array('as'=>'gameround.create', 'uses'=> 'RoundsController@create'));
Route::any('round/store/{id}',  array('as'=>'gameround.store', 'uses'=> 'GamesController@play'));
