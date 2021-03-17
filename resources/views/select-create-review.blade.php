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
        <li><a href="{{ route('game-create-form') }}" >Game</a> </li>
        <li><a href="{{ route('manga-create-form') }}">Manga</a> </li> 
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>
@endsection