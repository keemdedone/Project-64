@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('game-update',['game' => $game->id ]) }}" method="post">
    <table align="center" style="margin-top: 20px;" class="table-create">
    @csrf
        <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name" value="{{ $game->name }}" class="input"></td>
            </tr>
            <tr>
                <td>Type </td>
                <td>:</td>
                <td><input type="text" name="type" value="{{ $game->type }}" class="input"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><textarea name="description"  class="input">{{ $game->description }}</textarea></td>
            </tr>
            <tr>
                <td>Point </td>
                <td>:</td>
                <td><input type="text" name="point" value="{{ $game->point }}" class="input"></td>
            </tr>
            
        <form>
    </table>
    <input type="submit" value="Update" class="submit">
    </form>
@endsection