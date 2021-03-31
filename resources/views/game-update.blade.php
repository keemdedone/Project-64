@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('game-update',['game' => $game->id ]) }}" method="post">
    @error('input')
        <div class="alert">{{ $message }}</div>
    @enderror

    <table align="center" style="margin-top: 20px;" class="table-create">
    @csrf
        <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name" value="{{ old('name')?? $game->name }}" class="input"></td>
        </tr>

        <tr>
                <td>Type </td>
                <td>:</td>
                <td><input type="text" name="type" value="{{ old('type')?? $game->type }}" class="input"></td>
        </tr>
        
        <tr>
                <td>Description </td>
                <td>:</td>
                <td><textarea name="description"  class="input" value="{{ old('description')?? $game->description }}" >{{ $game->description }}</textarea></td>
        </tr>

        <tr>
                <td>Point </td>
                <td>:</td>
                <td><input type="text" name="point" value="{{ old('point')?? $game->point }}" class="input"></td>
        </tr>
            
    
</table>

    <input type="submit" value="Update" class="submit">
    
@endsection