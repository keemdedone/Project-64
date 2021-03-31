@extends('layouts.main')

@section('title',$title)

@section('content')

<form action="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}" method="get">
    <label>
       <h3 class="text-center"> Search : <input type="text" name="term" value="{{ $term }}" size="40"></h3>
    </label>
        {{ $games->withQueryString()->links() }}
    <b class="" ><a href ="{{ route('recommand-add-game-form',['recommand' => $recommand->id]) }}" class="submit2">Add game </a></b>
           
</form>

    <main>
        <table align="center" border="1" class="tablec2">
            <thead>
                  <tr class="tableco" align="center">
                      <th style="background-color: rgba(0, 0, 0, 0.226); ">ID   </th>
                      <th style="background-color: rgba(0, 0, 0, 0.226); ">Name </th>
                      <th style="background-color: rgba(0, 0, 0, 0.226); ">     </th>
                  </tr>
            </thead>

               <tbody>
                    @foreach($games as $game)
                    <tr>
                        <td class="alias">
                                         <b>
                                            <a href="{{ route('game-view', ['game' => $game -> id]) }}" style="color: white; text-decoration: none;"> {{ $game->id }} </a>
                                         </b>
                         </td>
                         <td>{{ $game->name }}</td>
                         <td>
                            <a href="{{ route('recommand-remove-game',['recommand' =>$recommand -> id,'game' => $game -> id,]) }}"  style="color: white;">Remove</a>
                         </td>
                    </tr>
                            @endforeach
                    </tbody>
            </table>
     </main>
@endsection