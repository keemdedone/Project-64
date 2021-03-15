@extends('layouts.main')

@section('title',$title)

@section('search')
    <form action="{{ route('recommand-list') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
    <table border="1">
        <tr>
            @foreach ($recommands as $recommand)
                    <td>
                        <a href="{{ route('recommand-view', ['recommand' => $recommand->id]) }}">
                            <img src="{{ asset("images/recommand/{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 250px;" /><br/>
                            <h3>{{$recommand->name}}</h3>
                        </a>
                    </td>
            @endforeach 
        </tr>
    </table>
    <form action="{{ route('recommand-list') }}">{{ $recommands->withQueryString()->links() }}</form>
@endsection