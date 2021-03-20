@extends('layouts.main')

@section('title',$title)

@section('search')

<body align="center">
    <form action="{{ route('manga-list') }}" method="get">
        <label class="alias">
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" class="alias"/>
        </label>
    </form>
@endsection
@section('content')

    @if(session()->has('status'))
        <div class="status">
            <span>{{ session()->get('status') }}</span>
        </div>
    @endif  

    <table border="0" align="center" class="table">
        <tr >
        @foreach ($mangas as $manga)
            @if ( ($manga->id)/4 == 1)
                <tr></tr>
            @endif
            <td class="glow-button">
                <a href="{{ route('manga-view', ['manga' => $manga->id]) }}" class="alias" style="color: rgb(255, 255, 255);">
                    <img src="{{ asset("images/manga/m{$manga['id']}.jpg") }}" alt="The image of {{ $manga['name'] }}" style="width: 180px; margin-top: 20px;" /><br/>
                    <h3>{{$manga->name}}</h3>
                </a>
            </td>
        @endforeach 
        </tr>
    </table>
<table  align="center"> 
    <tr>
        <td>
    <b action="{{ route('manga-list') }}" class="next">{{ $mangas->withQueryString()->links() }}</b>
</td>
</tr>
</table>
    </body>
@endsection