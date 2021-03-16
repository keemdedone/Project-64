@extends('layouts.main')

@section('title',$title)

@section('search')

<body align="center">
    <form action="{{ route('manga-list') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
<table class="table0"><tr><td>
    <table border="0" align="center" class="table">
        <tr >
        @foreach ($mangas as $manga)
            @if ( ($manga->id)/4 == 1)
                <tr></tr>
            @endif
            <td class="glow-button">
                <a href="{{ route('manga-view', ['manga' => $manga->id]) }}">
                    <img src="{{ asset("images/manga/m{$manga['id']}.jpg") }}" alt="The image of {{ $manga['name'] }}" style="width: 180px; margin-top: 20px;"  /><br/>
                    <h3>{{$manga->name}}</h3>
                </a>
            </td>
        @endforeach 
        </tr>
    </table>
</td></tr></table>
    <form action="{{ route('manga-list') }}" class="next">{{ $mangas->withQueryString()->links() }}</form>
    </body>
@endsection