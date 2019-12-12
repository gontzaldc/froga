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
            <tr>
                <th>Character</th>
                <th>Real Name</th>
            </tr>
            @foreach($games as $tablegames)
            <tr >
                <td>{{ $tablegames->izena }}</td>
                <td>{{ $tablegames->jokalariKop }}</td>
                <td><a href="{{ URL::to('games/' . $tablegames->id)}}">Show</a></td>
                <td><a href="{{ URL::to('games/' . $tablegames->id . '/edit')}}">Edit</a></td>
                <td>
                    <form action="/games/{{ $tablegames->id }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-default">Delete</button>
                    </form>
                </td>  
            </tr>
            @endforeach
        </table>
    @endif

</div>
@if(Auth::guest())
<a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
@endif
</div>
</div>
</div>
@endsection
