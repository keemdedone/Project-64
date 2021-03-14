@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('game-update-form',['game' => $game->id])}}">UPDATE</a>
@endsection