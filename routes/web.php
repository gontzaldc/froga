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

Route::get('/submit', function () {
  return view('submit');
});

Route::post('/submit', function (Request $request) {

    //Data array-ean sartzen ditu formulariotako datuak, eta balidatu egiten ditu
    $data = $request->validate([
        'izena' => 'required|max:255',
        'deskripzioa' => 'required|max:255',
        'adina' => 'required|max:255',
        'jokalariKop' => 'required|max:255',
        'irudia' => 'required',
        'sortzailea_ID'=> 'nullable'
                
    ]);
    //Logeatutako erabiltzailea hartzen du
    $user = auth()->user();

    //Irudiaren artxiboa hartzen du
    $file = $request->file('irudia');

    //Irudiaren extensioa hartzen du
    $extension = $file->getClientOriginalExtension(); 

    //enctype="multipart/form-data" izena asko aldatzen du, beraz atal batzuk aldatzen dira datu basean eta img karpetan egokitzeko
    $data['irudia']=str_replace('C:\xampp\tmp\\','',$data['irudia']);
    $data['irudia']=str_replace('tmp',$extension,$data['irudia']);

    //jokuaren sortutako erabiltzailearen id-a jartzen dio, logeatutako eabiltzailea izango da
    $data['sortzailea_ID']=$user->id;
    
    //Irudia public/img karpetan sartzen du
    $file->move('img/register',$data['irudia']);
    
    //Datuak db-n gordetzen ditu
    $games = tap(new App\tableGame($data))->save();

    return redirect('/');
});

Route::get('/', 'GameController@index')->name( 'index' );
Route::resource('games', 'GameController');

