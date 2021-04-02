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
<table class="tableb-sub" align="center" >
    <tr>
        <td>
            <table align="center">
                <tr>
                    <td>
                        <ul>
                            @can('update',\App\Models\Recommand::class)
                                <li><a href="{{ route('recommand-create-form') }}" class="alias">Create Recommend</a></li>
                            @endcan
                        </ul>
                    </td>
                </tr>
            </table>  
        </td>
    </tr>
</table>

    @if(session()->has('status'))
        <div class="status">
            <span>{{ session()->get('status') }}</span>
        </div>
    @endif 

    <table border="0" align="center" class="table" style="margin-top: 50px;"> 
        <tr>
            @foreach ($recommands as $recommand)
                    <td class="glow-button">
                        <a href="{{ route('recommand-view', ['recommand' => $recommand->id]) }}" class="alias" style="color: rgb(255, 255, 255);">
                            <img src="{{ asset("images/recommand/{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 250px;" /><br/>
                            <h3>{{$recommand->name}}</h3>
                        </a>
                    </td>
            @endforeach 
        </tr>
    </table>

    <table  align="center"> 
        <tr>
            <td>
                <b action="{{ route('recommand-list') }}">{{ $recommands->withQueryString()->links() }}</b>
            </td>
        </tr>
    </table>
<body>
@endsection