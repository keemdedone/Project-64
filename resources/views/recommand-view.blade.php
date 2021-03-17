@extends('layouts.main')

@section('title',$title)

@section('content')
<table class="" align="center">
@if ($check == "game")
<tr>
    <td>
       <ul style="background-color: #4CAF50;">
           <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias" style="">UPDATE this Game Review</a></li>
           <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"    style="background-color: red;"> DELETE this Game Review</a></li>
           
       </ul>
       
           <li><a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}" style="text-decoration: none; color: white;">Show Game</a></li>
       
    </td>
</tr>
</table> 
@if(session()->has('status'))
    <div class="status">
      <span>{{ session()->get('status') }}</span>
    </div>
  @endif

<table class="" align="center">
    
    @else

    <tr>
    <td>
       <ul >
           <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Manga Review</a></li>
           <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias" style="background-color: red;"> DELETE this Manga Review</a></li>
           
       </ul>
       <ul style="background-color: #4CAF50;">
          <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" style="text-decoration: none; color: white;">Show Manga</a>
       </ul>
    </td>
</tr>
</table> 
    @endif
    @if(session()->has('status'))
    <div class="status">
      <span>{{ session()->get('status') }}</span>
    </div>
  @endif
@endsection