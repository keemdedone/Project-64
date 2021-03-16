@extends('layouts.main')

@section('title',$title)

@section('content')
    <table>
        <form action="{{ route('recommand-create')}}" method="post">
        @csrf
            <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Select Type</td>
                <td>:</td>
                <td>
                    <select name="type">
                        <option value="game">Game</option>
                        <option value="manga">Manga</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Review By </td>
                <td>:</td>
                <td><input type="text" name="review_by"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Create"></td>
            </tr>
        <form>
    </table>
@endsection