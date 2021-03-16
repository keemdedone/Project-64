@extends('layouts.main')

@section('title',$title)

@section('content')
<style>
table{
    width:15cm;
}
</style>
<br>
    <nav>
        <ul>
            <li>
                <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}"> Back </a>
            </li>
        </ul>
    </nav>
<form action="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" method="get">
    {{ $mangas->withQueryString()->links() }}
</form>
    <main>
        <form action="{{ route('recommand-add-manga',['recommand' => $recommand->id]) }}" method="post">
        @csrf
            <table align="center" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Recommand ID</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($mangas as $manga)
                    <tr>
                        <td>
                            <b>
                            <a href="{{ route('manga-view', ['manga' => $manga->id]) }}"> {{ $manga->id }} </a>
                            </b>
                        </td>
                        <td>{{ $manga->name }}</td>
                        <td>{{ $manga->recommands_id }} </td>
                        <td><button typee="submit" name="manga" value="{{ $manga->id }}">Add manga</button></td>  
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </main>
@endsection