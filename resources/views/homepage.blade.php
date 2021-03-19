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
        @can('update',\App\Models\Recommand::class)
        <li><a href="{{ route('select-create-review') }}" >Create Review</a> </li>
        @endcan
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>
    
@endsection