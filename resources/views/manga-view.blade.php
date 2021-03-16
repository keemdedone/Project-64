@extends('layouts.main')

@section('title',$title)

@section('content')
    <a href="{{ route('manga-update-form',['manga' => $manga->id])}}" class="alias">Update this Review</a>
    <a href="{{ route('manga-delete', ['manga' => $manga->id]) }}" class="alias"> DELETE this Review</a>

    
    <div>
    <img src="{{ asset("images/manga/m{$manga['id']}.jpg") }}" alt="The image of {{ $manga['name'] }}" style="width: 180px; margin-top: 20px;" /><br/>
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
      
    
  </table >

  <table align="center" class="tabledes">
  <tr>
     <td>{{ $manga->description }}</td>
  </tr>
  </table>
</div> 


@endsection