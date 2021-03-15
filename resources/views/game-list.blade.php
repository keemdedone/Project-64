@extends('layouts.main')

@section('title',$title)

@section('search')
<body align="center">
    <form action="{{ route('game-list') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
    <table border="1"align="center"> 
        <tr>
        @foreach ($games as $game)
            @if ( ($game->id)/4 == 1)
                <tr></tr>
            @endif
                <td>
                    <a href="{{ route('game-view', ['game' => $game->id]) }}">
                        <img src="{{ asset("images/game/g{$game['id']}.jpg") }}" alt="The image of {{ $game['name'] }}" style="width: 250px;" /><br/>
                        <h3>{{$game->name}}</h3>
                        <h3>{{$game->game_img}}</h3>
                    </a>
                </td>
        @endforeach 
        </tr>
    </table>
    <form action="{{ route('game-list') }}">{{ $games->withQueryString()->links() }}</form>
    </body>
@endsection