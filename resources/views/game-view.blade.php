@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('game-update-form',['game' => $game->id])}}">UPDATE this Review</a>
    <a href="{{ route('game-delete', ['game' => $game->id]) }}"> DELETE this Review</a>
@endsection