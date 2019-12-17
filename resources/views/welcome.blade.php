@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-success">
<div class="panel-heading">List of Game of Thrones Characters</div>

    @if(Auth::check())
        <!-- Table -->
        <table class="table">
        <p>page: {{$games->currentPage()}} / {{$games->lastPage()}} Registroak:{{$games->firstItem()}}-{{$games->lastItem()}}</p>
            <tr>
                <th>Izena</th>
                <th>Jokalari kopurua</th>
            </tr>
            @foreach($games as $tablegames)
            <tr >
                <td class="tablacontenido">{{ $tablegames->izena }}</td>
                <td class="tablacontenido">{{ $tablegames->jokalariKop }}</td>
                <td class="tablaimg"><a href="{{ URL::to('games/' . $tablegames->id)}}"><img class="imagen" src="img/web_page/see.png"></td>
                <td class="tablaimg"><a href="{{ URL::to('games/' . $tablegames->id . '/edit')}}"><img class="imagen" src="img/web_page/edit.png"></a></td>
                <td class="tablaimg">
                    <form action="/games/{{ $tablegames->id }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="botonhidden" type="submit"><img class="imagen" src="img/web_page/delete.png"></button>
                    </form>
                </td>  
            </tr>
            @endforeach
        </table>
        <a type="submit" class="btn btn-default" href="{{ $games->previousPageUrl() }}">Aurrekoa</a><a type="submit" class="btn btn-default" href="{{ $games->nextPageUrl() }}">Hurrengoa</a>
    @endif

</div>
@if(Auth::guest())
<a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
@endif
</div>
</div>
</div>
@endsection
