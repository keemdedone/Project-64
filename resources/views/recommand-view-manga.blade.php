@extends('layouts.main')

@section('title',$title)

@section('content')
<form action="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" method="get">
    <label>
       <h3 class="text-center"> Search : <input type="text" name="term" value="{{ $term }}" size="40"></h3>
    </label>
    {{ $mangas->withQueryString()->links() }}
    <nav>
        <ul>
            <li>
                <a href ="{{ route('recommand-add-manga-form',['recommand' => $recommand->id]) }}">Add manga </a> 
            </li>
        </ul>
    </nav>
</form>
    <main>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach($mangas as $manga)
                <tr>
                    <td>
                        <b>
                        <a href="{{ route('manga-view', ['manga' => $manga -> id]) }}"> {{ $manga->id }} </a>
                        </b>
                    </td>
                    <td>{{ $manga->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection