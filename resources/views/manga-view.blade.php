@extends('layouts.main')

@section('title',$title)

@section('content')


<body>

<table class="tableb-sub" align="center" >
<tr>
    <td>

<table align="center">
<tr>
    <td>
    @can('update',\App\Models\Manga::class)
       <ul >
           <li><a href="{{ route('manga-update-form',['manga' => $manga->id])}}" class="alias" style="">UPDATE this Review</a></li>
           <li><a href="{{ route('manga-delete', ['manga' => $manga->id]) }}" class="alias"    style="background-color: red;"> DELETE this Review</a></li>
       </ul>
    @endcan
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
    
  <div>
    <img src="{{ asset("images/manga/{$manga['id']}.jpg") }}" alt="The image of {{ $manga['name'] }}" style="width: 180px; margin-top: 20px;" /><br/>

     <table  align="center"> 
   
       <tr class="bo">

        <td ><strong>Id </strong></td>   <td>::</td>
        <td >{{ $manga->id }}</td> 

      </tr>

      <tr class="bo">
                     <td ><strong>Name</strong></td>  <td>::</td>
                     <td >{{ $manga->name }}</td>
      </tr>

      <tr class="bo">
                    <td ><strong>Type </strong></td> <td>::</td>
                    <td >{{ $manga->type }}</td>
      </tr>

      <tr class="bo">
                    <td ><strong>Writer </strong></td> <td>::</td>
                    <td >{{ $manga->writer }}</td>
      </tr>

      <tr class="bo">
                   <td ><strong>Point </strong></td> <td>::</td>
                   <td >{{ $manga->point }}/10</td>
      </tr>
      
    
    </table >

     <table align="center" class="tabledes">
      <tr>
         <td>{{ $manga->description }}</td>
      </tr>
     </table>
</div> 


@endsection