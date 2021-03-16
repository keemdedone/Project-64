@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('recommand-update',['recommand' => $recommand->id ]) }}" method="post">
    @csrf
        Name : <input type="text" name="name" value="{{ $recommand->name }}"> <br>
        Type : 
        <select name = "type" value="{{ $recommand->type }}" selected>
            @if ($recommand->type == "Manga")
                <option value="{{ $recommand->type }}">{{ $recommand->type }}</option>
                <option value="game">game</option>
            @else
                <option value="{{ $recommand->type }}">{{ $recommand->type }}</option> 
                <option value="manga">manga</option>
            @endif
        </select><br>
        Review By : <input type="text" name="review_by" value="{{ $recommand->review_by }}"> <br>
        Description : <input type="text" name="description" value="{{ $recommand->description }}"> <br>
        <input type="submit" value="update">
    </form>
@endsection