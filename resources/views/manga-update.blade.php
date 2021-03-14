@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('manga-update',['manga' => $manga->id ]) }}" method="post">
    @csrf
        Name : <input type="text" name="name" value="{{ $manga->name }}"> <br>
        Type : <input type="text" name="type" value="{{ $manga->type }}"> <br>
        Description : <input type="text" name="description" value="{{ $manga->description }}"> <br>
        Point : <input type="text" name="point" value="{{ $manga->point }}"> <br>
        <input type="submit" value="update">
    </form>
@endsection