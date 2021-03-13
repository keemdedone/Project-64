@extends('layouts.main')

@section('title',$title)

@section('search')
    <form action="{{ route('game') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="{{$term}}" />
        </label>
    </form>
    <table>
    <tr><td>OK</td></tr> 
    </table>
@endsection