@extends('layouts.main')

@section('title',$title)

@section('content')
<table class="tableb-sub" align="center" >
<tr>
    <td>

<table class="" align="center">
<tr>
    <td>
       <ul >
           <li><a href="{{ route('game-update-form',['game' => $game->id])}}" class="alias" style="">UPDATE this Review</a></li>
           <li><a href="{{ route('game-delete', ['game' => $game->id]) }}" class="alias"    style="background-color: red;"> DELETE this Review</a></li>
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>

  @if(session()->has('status'))
    <div class="status">
      <span>{{ session()->get('status') }}</span>
    </div>
  @endif    
        <img src="{{ asset("images/game/g{$game['id']}.jpg") }}" alt="The image of {{ $game['name'] }}" style="width: 180px; margin-top: 20px;"/>
      
<div>
  <table  align="center"> 
   
      <tr class="bo">
        <td ><strong>Id </strong></td>   <td>::</td>
        <td >{{ $game->id }}</td>
      </tr>
      <tr class="bo">
        <td ><strong>Name</strong></td>  <td>::</td>
        <td >{{ $game->name }}</td>
      </tr>
      <tr class="bo">
        <td ><strong>Type </strong></td> <td>::</td>
        <td >{{ $game->type }}</td>
      </tr>
      <tr class="bo">
        <td ><strong>Point </strong></td> <td>::</td>
        <td >{{ $game->point }}/10</td>
      </tr>
      
    
  </table >

  <table align="center" border="0" class="tabledes">
  <tr>
     <td >{{ $game->description }}</td>
  </tr>
  </table>
</div> 




@endsection