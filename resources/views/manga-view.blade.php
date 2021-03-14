@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('manga-update-form',['manga' => $manga->id])}}">Update this Review</a>
    <a href="{{ route('manga-delete', ['manga' => $manga->id]) }}"> DELETE this Review</a>
@endsection