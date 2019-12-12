<!-- app/views/show.blade.php -->
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('games') }}">View All Character</a></li>
        <li><a href="{{ URL::to('games/create') }}">Create a Character</a>
    </ul>
</nav>

<h1>Showing {{ $games->izena }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $games->adina }}</h2>
        <p>
            <strong>Jokalari Kopurua:</strong> {{ $games->jokalariKop }}<br>
            <strong>Deskripzioa:</strong> {{ $games->deskripzioa }}
        </p>
    </div>

@endsection
