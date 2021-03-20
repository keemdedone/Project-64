@extends('layouts.main')

@section('title',$title)

@section('content')
<form action="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" method="get">
    <label>
       <h3 class="text-center"> Search : <input type="text" name="term" value="{{ $term }}" size="40"></h3>
    </label>
    <b class="text-center" >{{ $mangas->withQueryString()->links() }}<b>
    <b class="" ><a href ="{{ route('recommand-add-manga-form',['recommand' => $recommand->id]) }}"  class="submit2" >Add manga </a></b>
</form><br /><br />
    <main>
        <table align="center" border="1" class="tablec">
            <thead>
                <tr class="tableco">
                    <th>ID</th>
                    <th>Name</th>
                    <th>remove</th>
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
                    <td>
                        <a href="{{ route('recommand-remove-manga',[
                            'recommand' =>$recommand -> id,
                            'manga' => $manga -> id,
                        ]) }}">Remove</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection