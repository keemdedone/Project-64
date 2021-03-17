@extends('layouts.main')

@section('title',$title)

@section('content')

<table align="center" style="margin-top: 20px;" class="table-create">
        <form action="{{ route('recommand-create')}}" method="post">
        @csrf
            <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name" class="input"></td>
            </tr>
            <tr>
                <td>Select Type</td>
                <td>:</td>
                <td>
                    <select name="type" >
                        <option value="Game" >Game</option>
                        <option value="Manga">Manga</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Review By </td>
                <td>:</td>
                <td><input type="text" name="review_by" class="input"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><input type="text" name="description" class="input"></td>
            </tr>
        <form>
    </table>
    <input type="submit" value="Create" class="submit">
@endsection