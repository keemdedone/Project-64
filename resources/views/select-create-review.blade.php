@extends('layouts.main')

@section('title','Create Review Select Type')

@section('content')

<table class="tableb-sub" align="center" >
<tr>
    <td>

<table class="" align="center">
<tr>
    <td>
       <ul >
        @can('update',\App\Models\Game::class)
        <li><a href="{{ route('game-create-form') }}" >Game</a> </li>
        @endcan
        @can('update',\App\Models\Manga::class)
        <li><a href="{{ route('manga-create-form') }}">Manga</a> </li> 
        @endcan
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>
@endsection