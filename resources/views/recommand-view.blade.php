@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}">Show Game</a>
@endsection