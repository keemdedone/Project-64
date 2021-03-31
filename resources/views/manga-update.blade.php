@extends('layouts.main')

@section('title',$title)

@section('content')
    <form action="{{ route('manga-update',['manga' => $manga->id ]) }}" method="post">
    <table align="center" style="margin-top: 20px;" class="table-create">
    @error('input')
        <div class="alert">{{ $message }}</div>
    @enderror
    @csrf
        <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name" value="{{ old('manga')?? $manga->name }}" class="input"></td>
            </tr>
            <tr>
                <td>Type </td>
                <td>:</td>
                <td><input type="text" name="type" value="{{ old('manga')?? $manga->type }}" class="input"></td>
            </tr>
            <tr>
                <td>Writer </td>
                <td>:</td>
                <td><input type="text" name="writer" value="{{ old('manga')?? $manga->writer }}"class="input"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><textarea type="text" name="description"  class="input" value="{{ old('manga')?? $manga->description }}">{{ $manga->description }}</textarea></td>
            </tr>
            <tr>
                <td>Point </td>
                <td>:</td>
                <td><input type="text" name="point" value="{{ old('manga')?? $manga->point }}" class="input"></td>
            </tr>
            
        <form>
    </table>
       <input type="submit" value="Update" class="submit" >
    </form>
@endsection