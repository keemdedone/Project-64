@extends('layouts.main')

@section('title',$title)

@section('content')
    @if ($check == "game")
    <a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Game Review</a>
    <a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"> DELETE this Game Review</a><br />
    <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}">Show Game</a>
    @else
    <a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Manga Review</a>
    <a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"> DELETE this Manga Review</a><br />
    <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}">Show Manga</a>
    @endif
@endsection