@extends('layouts.main')

@section('title','Game')

@section('search')
    <form action="{{ route('game') }}" method="get">
        <label>
            <b>search</b>
            <input type="text" name="term" value="" />
        </label>
    </form>
    <table>
    
    </table>
@endsection