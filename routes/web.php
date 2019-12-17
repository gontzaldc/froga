<?php
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
  $games = \App\tableGame::all();

  return view('welcome', ['games' => $games]);
});

Route::any('/search',function(Request $request){
  $q = $request->input('q');

  $query= DB::table('tablegames')->where('izena', 'like', '%'.$q.'%')->orwhere('jokalariKop', '=',$q)->get();
  return view('search')->with('games', $query);

});

Route::get('/', 'GameController@index')->name( 'index' );
Route::resource('games', 'GameController');

