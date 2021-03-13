@extends('layouts.main')

@section('title',$title)

@section('search')
    <form action="{{ route('game-list') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
    <table border="1">
        @foreach ($games as $game)
        <tr>
            <td>
                <a href="{{ route('game-view', ['game' => $game->name]) }}">
                    <img src="{{ asset("images/game/{$game['id']}.jpg") }}" alt="The image of {{ $game['name'] }}" style="width: 250px;" /><br/>
                    <h3>{{$game->name}}</h3>
                </a>
            </td>
        </tr>
        @endforeach 
    </table>
    <form action="{{ route('game-list') }}">{{ $games->withQueryString()->links() }}</form>
@endsection