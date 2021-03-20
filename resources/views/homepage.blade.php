@extends('layouts.main')

@section('title','Homepage')

@section('content')

<table class="tableb-sub" align="center" >
<tr>
    <td>

<table class="" align="center" style="margin-top: 30px;">
<tr>
    <td>
       <ul >
        @can('update',\App\Models\Recommand::class)
        <li><a href="{{ route('select-create-review') }}">Create Review</a> </li>
        @endcan
       </ul>
    </td>
</tr>
</table > 
<table align="center" >
<h2 style="margin-top: 50px;"> Welcome !!!</h2>
<tr>
<td><img src="https://wallpaperaccess.com/full/2825727.gif" style="width: 500px; margin-top: 20px; margin-bottom: 100px;"/></td>
</tr>
</table>
  
    </td>
</tr>
</table>
    
@endsection