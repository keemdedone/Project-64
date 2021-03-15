@extends('layouts.main')

@section('title',$title)

@section('content')
    <table>
        <form action="{{ route('manga-create')}}" method="post">
        @csrf
            <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Type </td>
                <td>:</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Writer </td>
                <td>:</td>
                <td><input type="text" name="writer"></td>
            </tr>
            <tr>
                <td>Description </td>
                <td>:</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>Point </td>
                <td>:</td>
                <td><input type="text" name="point"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Create"></td>
            </tr>
        <form>
    </table>
@endsection