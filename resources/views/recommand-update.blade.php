@extends('layouts.main')

@section('title',$title)

@section('content')
<body>
   <form action="{{ route('recommand-update',['recommand' => $recommand->id ]) }}" method="post">
   @csrf
      <table align="center" style="margin-top: 20px;" class="table-create">
        <tr>
           <td>Name</td> 
           <td>:</td>  
           <td><input type="text" name="name" value="{{ old('recommand')?? $recommand->name }}" class="input"></td> 
        </tr>

        <tr>
           <td>Type</td>  
           <td>:</td>  
           <td><select name = "type" value="{{ $recommand->type }}" selected>
               @if ($recommand->type == "Manga")
                  <option value="{{ $recommand->type }}">{{ $recommand->type }}</option>
                  <option value="Game">Game</option>
               @else
                  <option value="{{ $recommand->type }}">{{ $recommand->type }}</option> 
                  <option value="Manga">Manga</option>
               @endif
               </select>
            </td>
         </tr>

         <tr>
            <td>Review By </td> 
            <td>: </td>
            <td><input type="text" name="review_by" value="{{ old('recommand')?? $recommand->review_by }}" class="input"></td>
         </tr>

         <tr>
            <td>Description</td>  
            <td>:</td>  
            <td><input type="text" name="description" value="{{ old('recommand')?? $recommand->description }}" class="input"></td> 
        </tr>

      </table>
      <input type="submit" value="update" class="submit">
   </form>
</body>
@endsection