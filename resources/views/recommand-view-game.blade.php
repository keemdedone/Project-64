@extends('layouts.main')

@section('title',$title)

@section('content')

<form action="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}" method="get">
    <label>
       <h3 class="text-center"> Search : <input type="text" name="term" value="{{ $term }}" size="40"></h3>
    </label>
    {{ $games->withQueryString()->links() }}
    <nav>
        <ul>
            <li>
                <a href ="{{ route('recommand-add-game-form',['recommand' => $recommand->id]) }}" class="alias">Add game </a> 
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
            @foreach($games as $game)
                <tr>
                    <td class="alias">
                        <b>
                        <a href="{{ route('game-view', ['game' => $game -> id]) }}" > {{ $game->id }} </a>
                        </b>
                    </td>
                    <td>{{ $game->name }}</td>
                    <td>
                        <a href="{{ route('recommand-remove-game',[
                            'recommand' =>$recommand -> id,
                            'game' => $game -> id,
                        ]) }}">Remove</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection