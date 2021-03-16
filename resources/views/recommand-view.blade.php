@extends('layouts.main')

@section('title',$title)

@section('content')
    @if ($check == "game")
    <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}">Show Game</a>
    @else
    <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}">Show Manga</a>
    @endif
@endsection