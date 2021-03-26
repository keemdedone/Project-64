@extends('layouts.main')

@section('title',$title)

@section('content')

<table class="" align="center"  border="0" >
    @if ($check == "Game")
    <tr>
        <td>
        @can('update',\App\Models\Recommand::class)
            <ul>
                <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Game Review</a></li>
                <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"  style="background-color: red;"> DELETE this Game Review</a></li>
            </ul>
        </td>
    </tr>
</table>
<form >  
<table class="" align="center"  border="0" style="">
    <tr>    
        <td> 
<ul> <li>       
            <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}"  class="alias" style="color: rgb(255, 255, 255);background-color: #4CAF50;">Show Game</a>
</li>
</ul>
        </td>
    </tr>
        @endcan   
</table>
</form>

    <img src="{{ asset("images/recommand/re{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 380px; margin-top: 20px;"/>
  
<table align="center" border="1" class="tablec2" >
    
    <thead>
                    <tr  class="text-center">
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">TOP</th>
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">Game name</th>
                    </tr>
        </thead>
        @foreach($games as $game)
            <tr>
                <td class="alias">
                    <b>
                        {{ $game->id }} 
                    </b>
                </td>
                <td><a href="{{ route('game-view', ['game' => $game -> id]) }}" style="color: white; text-decoration: none;">{{ $game->name }}</a></td>    
            </tr>
        @endforeach  
</table>

    @else

<table class="" align="center"  border="0">   
<tr>
    <td>
        @can('update',\App\Models\Recommand::class)
        <ul>
             <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Manga Review</a></li>
             <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias" style="background-color: red;"> DELETE this Manga Review</a></li>
        </ul>
    </td>
</tr>
</table>

<table class=""  align="center"  border="0" style="">
    <tr >
        <td> 
<ul>  
<li><a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}"  class="alias" style="color: rgb(255, 255, 255);background-color: #4CAF50;">Show Manga</a></li>
</ul>
        </td>
    </tr>    
        @endcan       
</table>

        <img src="{{ asset("images/recommand/re{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 380px; margin-top: 20px;"/>
    

<table align="center" border="1"  class="tablec2" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.226); ">
            <thead >
                    <tr class="text-center" >
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">TOP</th>
                        <th style="background-color: rgba(0, 0, 0, 0.226); ">Manga name</th>
                    </tr>
            </thead>    
        @foreach($mangas as $manga)
        <tbody>
            <tr>
                <td class="alias">
                    <b>
                        {{ $manga->id }} 
                    </b>
                </td>
                <td><a href="{{ route('manga-view', ['manga' => $manga -> id]) }}" style="color: white; text-decoration: none;" >{{ $manga->name }}</a></td>    
            </tr>
        </tbody>
        @endforeach  
</table>
    @endif
<table  align="center" class="tabledes" border="0">
    <tr>
        <td>{{ $recommand -> description }}</td>
    </tr>
</table>
@endsection