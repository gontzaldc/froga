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
        $games = \App\tableGame::all();
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
    public function store()
     {
    //     $data = $request->validate([
    //         'name' => 'required|max:255',
    //         'actor' => 'required|max:255',
    //         'description' => 'required|max:255',
    //     ]);
    //     $character = tap(new \App\Character($data))->save();
    //     return redirect('/');
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
