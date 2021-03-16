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
                <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}"> Back </a>
            </li>
        </ul>
    </nav>
<form action="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}" method="get">
    {{ $games->withQueryString()->links() }}
</form>
    <main>
        <form action="{{ route('recommand-add-game',['recommand' => $recommand->id]) }}" method="post">
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
                @foreach($games as $game)
                    <tr>
                        <td>
                            <b>
                            <a href="{{ route('game-view', ['game' => $game->id]) }}"> {{ $game->id }} </a>
                            </b>
                        </td>
                        <td>{{ $game->name }}</td>
                        <td>{{ $game->recommands_id }} </td>
                        <td><button typee="submit" name="game" value="{{ $game->id }}">Add</button></td>  
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </main>
@endsection