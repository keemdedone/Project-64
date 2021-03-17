@extends('layouts.main')

@section('title','Homepage')

@section('content')

<table class="tableb-sub" align="center" >
<tr>
    <td>

<table class="" align="center">
<tr>
    <td>
       <ul >
        <li><a href="{{ route('select-create-review') }}" >Create Review</a> </li>
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>
    
@endsection