@extends('layouts.main')

@section('title',$title)

@section('search')
    <form action="{{ route('manga-list') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
    <table border="1">
        @foreach ($mangas as $manga)
        <tr>
            <td>
                <a href="{{ route('manga-view', ['manga' => $manga->name]) }}">
                    <img src="{{ asset("images/manga/{$manga['id']}.jpg") }}" alt="The image of {{ $manga['name'] }}" style="width: 250px;" /><br/>
                    <h3>{{$manga->name}}</h3>
                </a>
            </td>
        </tr>
        @endforeach 
    </table>
    <form action="{{ route('manga-list') }}">{{ $mangas->withQueryString()->links() }}</form>
@endsection