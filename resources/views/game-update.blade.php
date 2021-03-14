@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('game-update',['game' => $game->id ]) }}" method="post">
    @csrf
        Name : <input type="text" name="name" value="{{ $game->name }}"> <br>
        Type : <input type="text" name="type" value="{{ $game->type }}"> <br>
        Description : <input type="text" name="description" value="{{ $game->description }}"> <br>
        Point : <input type="text" name="point" value="{{ $game->point }}"> <br>
        <input type="submit" value="update">
    </form>
@endsection