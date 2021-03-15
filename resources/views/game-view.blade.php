@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('game-update-form',['game' => $game->id])}}">UPDATE this Review</a>
    <a href="{{ route('game-delete', ['game' => $game->id]) }}"> DELETE this Review</a>

    
<div>
  <table  align="center"> 
   
    
      <tr>
        <td class="bo"><strong>Id </strong></td>   <td>::</td>
        <td class="bo">{{ $game->id }}</td>
      </tr>
      <tr>
        <td class="bo"><strong>Name</strong></td>  <td>::</td>
        <td class="bo">{{ $game->name }}</td>
      </tr>
      <tr>
        <td class="bo"><strong>Type </strong></td> <td>::</td>
        <td class="bo">{{ $game->type }}</td>
      </tr>
      
    
  </table >

  <table align="center">
  <tr>
     <td class="pp">{{ $game->description }}</td>
  </tr>
  </table>
</div> 


@endsection