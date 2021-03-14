@extends('layouts.main')

@section('title','Create Review Select Type')

@section('content')
    <a href="{{ route('game-create-form') }}">Game</a>
    <a href="{{ route('manga-create-form') }}">Manga</a>
@endsection