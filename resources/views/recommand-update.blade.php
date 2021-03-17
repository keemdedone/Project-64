@extends('layouts.main')

@section('title',$title)

@section('content')

<table align="center" style="margin-top: 20px;" class="table-create">
    <form action="{{ route('recommand-update',['recommand' => $recommand->id ]) }}" method="post">
    @csrf
<tr>
       <td> Name </td>
       <td>:     </td>
       <td><input type="text" name="name" value="{{ $recommand->name }}" class="input"></td>
</tr>
<tr>
       <td>Type</td> 
       <td> :  </td>
       <td><select name = "type" value="{{ $recommand->type }}"  selected>
            @if ($recommand->type == "Manga")
                <option value="{{ $recommand->type }}" >{{ $recommand->type }}</option>
                <option value="Game">Game</option>
       
            @else

                <option value="{{ $recommand->type }}">{{ $recommand->type }}</option> 
                <option value="Manga">Manga</option> 
            </td>
</tr>
            @endif
        </select><br>
<tr> 
    <td> Review By </td>
    <td>: </td>
    <td><input type="text" name="review_by" value="{{ $recommand->review_by }}" class="input"></td>
</tr>
<tr>
    <td>Description</td> 
    <td>: </td>
    <td><textarea type="text" name="description" class="input">{{ $recommand->description }}</textarea></td> 
</tr>
</table>
<input type="submit" value="update" class="submit"> 
    </form>
    
@endsection