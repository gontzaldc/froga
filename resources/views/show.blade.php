<!-- app/views/show.blade.php -->
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('games') }}">View All Character</a></li>
        <li><a href="{{ URL::to('games/create') }}">Create a Character</a>
    </ul>
</nav>
<center>
    <div id="showContent">
        <h1>{{ $games->izena }}</h1>

        <img src="../img/{{ $games->irudia }}" id="imgtable">
            <div class="">
                <p>
                    <strong>Adina:</strong>{{ $games->adina }}<br>
                    <strong>Jokalari Kopurua:</strong> {{ $games->jokalariKop }}<br>
                    <strong>Deskripzioa:</strong> {{ $games->deskripzioa }}
                </p>
            </div>
    </div>
</center>
@endsection
