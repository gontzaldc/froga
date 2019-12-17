<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $games = \App\tableGame::paginate(5);
        // load the view and pass the gamess
        return view('welcome', ['games' => $games]);
    }

    /**
     * Display the view to create the resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the view to enter a new character
        return view('submit');
    }

    /**
     * Store the new resource resource.
     *
     * @return Response
     */
    public function store(Request $request)
     {
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
    $games = tap(new \App\tableGame($data))->save();

    return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the character
    $games = \App\tableGame::find($id);
    // show the view and pass the character to it
    return view('show')->with('games', $games);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the character
        $games = \App\tableGame::find($id);
        // show the edit and pass the character to it
        return view('edit')->with('games', $games);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $data = $this->validate(request(), [
            'izena' => 'required|max:255',
            'deskripzioa' => 'required|max:255',
            'adina' => 'required|max:255',
            'jokalariKop' => 'required|max:255',
        ]);
    
        $games = \App\tableGame::findOrFail($id);
        $games->update(request()->all());
    
        return redirect('/');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $games = \App\tableGame::findOrFail($id);
        $games->delete();

        return redirect('/');

    }




}
