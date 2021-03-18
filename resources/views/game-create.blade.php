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
        <li><a href="{{ route('game-create-form') }}" >Game</a> </li>
        <li><a href="{{ route('manga-create-form') }}">Manga</a> </li> 
       </ul>
    </td>
</tr>
</table> 
  
    </td>
</tr>
</table>

<table align="center" style="margin-top: 20px;" class="table-create">
        <form action="{{ route('game-create')}}" method="post" enctype= "multipart/form-data" >
        @csrf
            <tr>
                <td>Image</td>
                <td>:</td>
                <td><input type="file" name="img"></td>
            </tr>
            <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name" class="input"></td>
            </tr>
            <tr>
                <td>Type </td>
                <td>:</td>
                <td><input type="text" name="type" class="input"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><textarea name="description" class="input"></textarea></td>
            </tr>
            <tr>
                <td>Point </td>
                <td>:</td>
                <td><input type="text" name="point" class="input"></td>
            </tr>
            
        <form>
    </table>
    <input type="submit" value="Create" class="submit">
@endsection