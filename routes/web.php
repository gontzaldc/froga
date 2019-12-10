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

Route::get('/', 'ListController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
     echo "You are allowed to view this page!";
  }]);

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );

Route::get('/', function () {
  $characters = \App\Character::all();

  return view('welcome', ['characters' => $characters]);
});
