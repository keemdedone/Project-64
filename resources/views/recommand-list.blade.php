@extends('layouts.main')

@section('title',$title)

@section('search')
<body align="center">
    <form action="{{ route('recommand-list') }}" method="get" >
        <label class="alias">
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" class="alias"/>
        </label>
    </form>
@endsection
@section('content')
<br /><a href="{{ route('recommand-create-form') }}" class="alias">Create Recommend</a><br />
<table border="0" align="center" class="table" style="margin-top: 50px;"> 
        <tr>
            @foreach ($recommands as $recommand)
                    <td class="glow-button">
                        <a href="{{ route('recommand-view', ['recommand' => $recommand->id]) }}" class="alias">
                            <img src="{{ asset("images/recommand/re{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 250px;" /><br/>
                            <h3>{{$recommand->name}}</h3>
                        </a>
                    </td>
            @endforeach 
        </tr>
    </table>
    <form action="{{ route('recommand-list') }}">{{ $recommands->withQueryString()->links() }}</form>
    <body>
@endsection