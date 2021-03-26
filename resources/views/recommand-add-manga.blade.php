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
            <table align="center" border="1" class="tablec2">
                <thead>
                    <tr class="tableco"  align="center">
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">ID</th>
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">Name</th>
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">Recommand ID</th>
                        <th style="background-color: rgba(0, 0, 0, 0.226); "></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($mangas as $manga)
                    <tr>
                        <td>
                            <b>
                            <a href="{{ route('manga-view', ['manga' => $manga->id]) }}" style="color: white; text-decoration: none;"> {{ $manga->id }} </a>
                            </b>
                        </td>
                        <td>{{ $manga->name }}</td>
                        <td>{{ $manga->recommands_id }} </td>
                        <td><button type="submit" name="manga" value="{{ $manga->id }}">Add</button></td>  
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </main>
@endsection