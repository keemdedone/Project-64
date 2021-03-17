@extends('layouts.main')

@section('title',$title)

@section('content')

<table class="" align="center"  border="0">

    @if ($check == "Game")
<tr>
    <td>
       <ul >
             <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Game Review</a></li>
             <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"  style="background-color: red;"> DELETE this Game Review</a></li>
       </ul>
    </td>
</tr>
</table>
<table class="button2" align="center"  border="0" style="width: 33.35%;">
<tr >
    <td >
          
      <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}"  class="alias" style="color: rgb(255, 255, 255);">Show Game</a>
       
    </td>
</tr>
<tr>
       
</table>
 
<table class="" align="center"  border="0">   
    @else
<tr>
    <td>
       <ul >
             <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Manga Review</a></li>
             <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias" style="background-color: red;"> DELETE this Manga Review</a></li>
       </ul>
    </td>
</tr>
</table>
<table class="button2" align="center"  border="0" style="width: 34.6%;">
<tr >
    <td >
          
    <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" class="alias" style="color: rgb(255, 255, 255);">Show Manga</a>
    </td>
</tr>
<tr>
       
</table>
    @endif
    @if(session()->has('status'))
        <div class="status">
            <span>{{ session()->get('status') }}</span>
        </div>
    @endif 
@endsection