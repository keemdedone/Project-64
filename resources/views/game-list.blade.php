@extends('layouts.main')

@section('title',$title)

@section('search')
    <form action="{{ route('game') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
@endsection
@section('content')
    <table border="1">
    <tr>
        <td>
            <img src="{{ asset("images/game/DS3.jpg") }}" 
            alt="The image of DS3." /><br />
            <a href="">Dark Soul 3</a>
        </td>
    </tr> 
    </table>
@endsection