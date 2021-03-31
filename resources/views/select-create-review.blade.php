@extends('layouts.main')

@section('title','Create Review Select Type')

@section('content')



<table  border="0" style="width: 100%; ">
<tr>
    <td onclick="window.location='/game/create'" class="submit3" style="width: 50%;"> 
        @can('update',\App\Models\Game::class)
            <b><a href="{{ route('game-create-form') }}" style="color: white; text-decoration: none; font-size: 300%;">Game</a> </b>
        @endcan
    </td>
    <td onclick="window.location='/manga/create'" class="submit3" style="width: 50%;" >
        @can('update',\App\Models\Manga::class)
            <b><a href="{{ route('manga-create-form') }}" style="color: white; text-decoration: none; font-size: 300%;">Manga</a> </b>
        @endcan
    </td>
</tr>
</table>
@endsection